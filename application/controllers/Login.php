<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * @param array $data
	 * @return void
	 */
	public function index($data = [])
	{
		$this->load->view('header_view.php', $data);	
        $this->load->view('login_view.php', $data);
		$this->load->view('footer_view.php', $data);
	}

	/**	
	 * @return void
	 */
	public function addUser()
	{
		$this->loadForm();
		$this->setRulesForUserRegistration();
		$data['user'] = $this->hydrateUser($this->input);
		if ($this->loginformvalidation->run() == FALSE) {
			$data['error'] = $this->loginformvalidation->error_array();
			$this->index($data);
		} else {
			$this->load->model('userModel');
			$this->userModel->insertUsers($this->user);
			$this->user->setUserId($this->db->insert_id());
			$this->session->set_userdata(['login' => $this->user]);
			$this->load->helper('url');
			redirect(base_url());
		}
	}


	/**
	 * @return void
	 */
	private function setRulesForUserRegistration()
	{
		$this->loginformvalidation->set_rules('name', 'Name', 'required|regex_match[/[a-zA-Z ]{1,30}/]');
		$this->loginformvalidation->set_rules(
			'email', 
			'Email', 
			'required|regex_match[/[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+/]|is_unique[user.email]'
		);
		$this->loginformvalidation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->loginformvalidation->set_rules('cpassword', 'Confirm password', 'required|matches[password]');
	}

	/**
	 * @param object $input
	 * @return User
	 */
	private function hydrateUser($input)
	{
		$this->user->setName($input->post('name'))
			->setEmail($input->post('email'))
			->setPassword(
				password_hash(
					$input->post('password'), 
					PASSWORD_DEFAULT
				)
		);
		
		return $this->user;
	}

	/**
	 * @return void
	 */
	public function userLogin()
	{
		$this->loadForm();
		$this->setRulesForUserLogin();
		if ($this->loginformvalidation->run() == FALSE) {
			$loginInfo['error'] = $this->loginformvalidation->error_array();
		} else {
			$this->load->model('userModel');
			$this->load->model('itemModel');

			$this->user->setEmail($this->input->post('lemail'));
			$this->user->setPassword($this->input->post('lpassword'));
			$loginInfo['user'] = $this->user;
			
			$dbUser = $this->userModel->getUser($this->user);
			if (isset($dbUser) && $dbUser != NULL) {
				$this->load->library('cartlibrary');
				$cartItems = $this->cartlibrary->getCartItems($dbUser->user_id, $this->itemModel, $this->item);

				$this->user->setUserId($dbUser->user_id);
				$this->user->setName($dbUser->name);
				$this->user->setCartItems($cartItems);

				$this->session->set_userdata(['login' => $this->user]);
				$loginInfo['user'] = $this->user;
				
				redirect(base_url());
			} else {
				$loginInfo['error'] = ['lpassword' => 'Incorrect password.'];
				$this->index($loginInfo);
			}
		}
	}

	/**
	 * @return void
	 */
	private function setRulesForUserLogin()
	{
		$this->loginformvalidation->set_rules('lemail', 'Email', 'required|regex_match[/[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+/]');
		$this->loginformvalidation->set_rules('lpassword', 'Password', 'required|min_length[8]');
	}

	/**
	 * loading form to controller
	 *
	 * @return void
	 */
	private function loadForm()
	{
		$this->load->helper('form');
		$this->load->library('loginformvalidation');
	}
}