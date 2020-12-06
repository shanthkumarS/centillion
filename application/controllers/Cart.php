<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{

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
		$data['user'] = $this->getUserData();

        $this->load->view('header_view.php', $data);
        $this->load->view('cart_view.php', $data);
		$this->load->view('footer_view.php', $data);
		
	}

	private function getUserData()
	{
		if (
			$this->session->userdata('login') != NULL && 
			!empty($this->session->userdata('login'))
		) {
			return $this->getUserEntity();
		}

		redirect('/login');
	}

	public function addItemToCart($itemId = NULL)
	{
		$this->load->model('itemModel');
		$this->load->library('cartlibrary');
		$this->user = $this->getUserData();

		if ($this->user != NULL){
			$userId = $this->user->getUserId();
			$this->itemModel->addItemToCart($itemId, $userId);
			$cartItems = $this->cartlibrary->getCartItems($userId, $this->itemModel, $this->item);
			$this->user->setCartItems($cartItems);
			$this->session->set_userdata(['login' => $this->user]);
			
			redirect(base_url());
		}
	}


	private function getUserEntity()
	{
		$this->user = unserialize(
			serialize(
				$this->session->userdata('login')
			)
		);

		return $this->user;
	}
}
	