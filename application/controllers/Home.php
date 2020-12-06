<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['items'] = $this->LoadItems();
		if (
			$this->session->userdata('login') != NULL && 
			!empty($this->session->userdata('login'))	
		) {
			$this->user = unserialize(
				serialize(
					$this->session->userdata('login')
				)
			);
			$data['user'] = $this->user;
		}

		$this->load->view('header_view.php', $data);	
        $this->load->view('home_view.php', $data);
		$this->load->view('footer_view.php', $data);
	}

	/**
	 * @return Item[]
	 */
	private function LoadItems()
	{
		$dbItems = $this->getItemsFromDb();
		$items = [];
		if(isset($dbItems) && !empty($dbItems)) {
			foreach ($dbItems as $dbItem) {
				$items[] = $this->hydrateItem($dbItem);
			}
		}
		
		return $items;
	}

	/**
	 * @param $dbItems
	 * @return Item 
	 */
	private function hydrateItem($dbItem) {
		$item = clone $this->item;
		$item->setItemId($dbItem->item_id);
		$item->setName($dbItem->name);
		$item->setDescription($dbItem->description);

		return $item;
	}

	/**
	 * @return array
	 */
	private function getItemsFromDb()
	{
		$this->load->model('itemModel');
		return $this->itemModel->fetchItems();
	}
}