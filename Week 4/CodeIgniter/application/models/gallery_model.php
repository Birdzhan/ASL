<?php
class Gallery_model extends CI_Model {

    var $gallery_path;
    var $gallery_path_url;

    function Gallery_model() {

        parent::__construct();

        $this->gallery_path =  realpath(APPPATH . '../uploaded_images');
        $this->gallery_path_url = base_url().'uploaded_images/';
    }

    function do_upload() {

        $config = array(

            'allowed_types'=>'jpg|jpeg|png',
            'upload_path'=>$this->gallery_path
        );

        $this->load->library('upload', $config);
        $this->upload->do_upload();

        $image_data = $this->upload->data();

        $config = array(
            'source_image'=>$image_data['full_path'],
            'new_image'=>$this->gallery_path . '/thumbs',
            'maintain_ratio'=>TRUE,
            'width'=>150,
            'height'=>150

        );

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();

    }
    function get_images() {

        $files = scandir($this->gallery_path);
        $files = array_diff($files, array('.', '..', 'thumbs'));
        $images = array();

        foreach ($files as $file) {
            $images [] = array(
                'url' => $this->gallery_path_url . $file,
                'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file

            );
        }

        return $images;

    }

}