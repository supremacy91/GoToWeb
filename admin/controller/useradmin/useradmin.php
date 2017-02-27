<?php
class ControllerUseradminUseradmin extends Controller{
    public function index(){
        $this->load->language('useradmin/useradmin');

        $data = array();
        $this->document->setTitle($this->language->get('heading_title'));
        $this->response->setOutput($this->load->view('useradmin/useradmin', $data));
    }
}
