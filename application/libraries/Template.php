<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Template {

    protected $_ci;
   
    function __construct() {
        $this->_ci = &get_instance();
        $this->_ci->load->model('Mod_notification','notif');      
    }
    function admin_views( $template = NULL, $data = NULL ) {
        if( $template != NULL )
        $data['_body']      = $this->_ci->load->view($template, $data, TRUE);
        $data['_preloader'] = $this->_ci->load->view('layouts/admin/preloader', $data, TRUE);
        $data['_css']       = $this->_ci->load->view('layouts/admin/css', $data, TRUE);
        $data['_js']        = $this->_ci->load->view('layouts/admin/js', $data, TRUE);
        $data['_header']    = $this->_ci->load->view('layouts/admin/header', $data, TRUE);
        $data['_footer']    = $this->_ci->load->view('layouts/admin/footer', $data, TRUE);
        $data['_head']      = $this->_ci->load->view('layouts/admin/head', $data, TRUE);
        $data['_menu']      = $this->_ci->load->view('layouts/admin/menu', $data, TRUE);
        echo $data['_template']  = $this->_ci->load->view('layouts/admin/template', $data, TRUE);
    }

    // function back_views( $template = NULL, $data = NULL ) {
    //     if( $template != NULL )
    //     //edit
    //     $data['notif'] = $this->_ci->notif->getNotif()->result_array();
    //     $data['jumlah']    = $this->_ci->notif->countNotif(); 
    //     //emd edit
    //     $data['_body']      = $this->_ci->load->view($template, $data, TRUE);
    //     $data['_preloader'] = $this->_ci->load->view('layouts/back/preloader', $data, TRUE);
    //     $data['_css']       = $this->_ci->load->view('layouts/back/css', $data, TRUE);
    //     $data['_js']        = $this->_ci->load->view('layouts/back/js', $data, TRUE);
    //     $data['_header']    = $this->_ci->load->view('layouts/back/header', $data, TRUE);
    //     $data['_footer']    = $this->_ci->load->view('layouts/back/footer', $data, TRUE);
    //     $data['_head']      = $this->_ci->load->view('layouts/back/head', $data, TRUE);
    //     $data['_menu']      = $this->_ci->load->view('layouts/back/menu', $data, TRUE);
    //     echo $data['_template']  = $this->_ci->load->view('layouts/back/template', $data, TRUE);
    // }

    function front_views( $template = NULL, $data = NULL ) {
        if( $template != NULL )
        $data['_head']           = $this->_ci->load->view('layouts/front/head', $data, TRUE);
        $data['_css']            = $this->_ci->load->view('layouts/front/css', $data, TRUE);
        $data['_header']         = $this->_ci->load->view('layouts/front/header', $data, TRUE);
        $data['_body']           = $this->_ci->load->view($template, $data, TRUE);
        $data['_footer']         = $this->_ci->load->view('layouts/front/footer', $data, TRUE);
        $data['_js']             = $this->_ci->load->view('layouts/front/js', $data, TRUE);
        echo $data['_template']  = $this->_ci->load->view('layouts/front/template', $data, TRUE);
    }
    
    function store_views( $template = NULL, $data = NULL ) {
        if( $template != NULL )
        $data['_head']      = $this->_ci->load->view('layouts/store/_head', $data, TRUE);
        $data['_css']       = $this->_ci->load->view('layouts/store/_css', $data, TRUE);
        $data['_header']    = $this->_ci->load->view('layouts/store/_header', $data, TRUE);
        $data['_sidebar']   = $this->_ci->load->view('layouts/store/_sidebar', $data, TRUE);
        $data['_body']      = $this->_ci->load->view($template, $data, TRUE);
        $data['_cart']      = $this->_ci->load->view('layouts/store/_cart', $data, TRUE);
        $data['_footer']    = $this->_ci->load->view('layouts/store/_footer', $data, TRUE);
        $data['_js']        = $this->_ci->load->view('layouts/store/_js', $data, TRUE);
        echo $data['_template']  = $this->_ci->load->view('layouts/store/_template', $data, TRUE);
    }
}
?>
