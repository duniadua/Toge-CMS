<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UploadController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class UploadController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('images_model', 'img');
        $this->load->library('MY_Upload', '', 'upload');
    }

    public function index() {
        $data['pageTitle'] = 'Upload Files';
        $data['uploadGallery'] = $this->img->gets();

        $this->load->view('backend_header');
        $this->load->view('upload', $data);
        $this->load->view('backend_footer');
    }

    public function doUpload() {

        $config['upload_path'] = './asset/images';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['remove_spaces'] = TRUE;
        $config['max_size'] = '2000';

        $this->upload->initialize($config);


        if ($this->upload->do_multi_upload('userfile')) {
            $data = array('upload_data' => $this->upload->get_multi_upload_data(),
                'pageTitle' => 'Upload Files',
                'uploadGallery' => $this->img->gets(),
            );

            $this->insertImages();

            $this->load->view('backend_header');
            $this->load->view('upload', $data);
            $this->load->view('backend_footer');
        } else {
            $data = array('error' => $this->upload->display_errors());
            
            $this->load->view('backend_header');
            $this->load->view('upload', $data);
            $this->load->view('backend_footer');
        }
    }

    private function insertImages() {
        $dataPost = str_replace(' ', '_', $_FILES['userfile']['name']);

        if (isset($dataPost)):
            foreach ($dataPost as $rowPost):
                $this->img->insertImage($rowPost);
            endforeach;
        endif;
    }

}
