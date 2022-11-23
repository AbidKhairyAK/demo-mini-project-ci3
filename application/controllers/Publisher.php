<?php

class Publisher extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('publisher_model');
	}

	public function index()
	{
		$data['page_title'] = 'Publisher List';
		$data['page_name'] = 'publisher/index';
		$data['items'] = $this->publisher_model->get_all();

		$this->load->view('main', $data);
	}

	public function create()
	{
		$data['page_title'] = 'Create Publisher';
		$data['page_name'] = 'publisher/form';

		$this->load->view('main', $data);
	}

	public function create_process()
	{
		$this->publisher_model->create_item();
		redirect(site_url('publisher'));
	}

	public function update($id)
	{
		$data['page_title'] = 'Update Publisher';
		$data['page_name'] = 'publisher/form';

		$data['item'] = $this->publisher_model->get_item($id);
		$this->load->view('main', $data);
	}

	public function update_process($id)
	{
		$this->publisher_model->update_item($id);
		redirect(site_url('publisher'));
	}

	public function delete_process($id)
	{
		$this->publisher_model->delete_item($id);
		redirect(site_url('publisher'));
	}
}