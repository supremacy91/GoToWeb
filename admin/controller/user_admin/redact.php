<?php
class ControllerUseradminRedact extends Controller {
    public function index() {

        $this->load->language('user_admin/redact');

        $this->document->setTitle($this->language->get('heading_title'));
        $data['main_message'] = $this->language->get('main_message');
        $this->response->setOutput($this->load->view('user_admin/redact', $data));
    }
}