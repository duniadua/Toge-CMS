<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShowController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class ShowController extends CI_Controller {

    private $listPage = 'homebase.html.twig';
    private $homePage = 'home.html.twig';

    public function __construct() {
        parent::__construct();
        $this->load->model('Page_Model', 'pm');
        $this->load->model('Category_Model', 'cm');
        $this->load->model('Menus_Model', 'mm');
    }

    public function index() {        
        $param = array(
            'where' => ' status = 1',            
        );

        $menuArray = array(
            'where' => ' status = 1',
            'and' => 'parent = 0',
        );
        
        $menuChildArray = array(
            'where' => ' status = 1',            
        );
        
        $data['pageTitle'] = 'Create Page';
        $data['themespath'] = base_url().THEMES_PATH;
        $data['site_url'] = site_url();
        $data['content'] = $this->pm->gets($param);
        $data['categorylist'] = $this->cm->gets();
        $data['menus'] = $this->mm->gets($menuArray);
        $data['menu_child'] = $this->mm->gets($menuChildArray);
        

        $this->twig->display($this->listPage, $data);
    }
    
    public function pid($id = null) {
        if(isset($id)):            
            $ids = $id;
        else:
            $ids = 1;
        endif;
        
        $param = array(
            'where' => 'ID = ' . $ids,
            'and' => ' status = 1'
        );
        
        $menuArray = array(
            'where' => ' status = 1',
            'and' => 'parent = 0',
        );
        
        $menuChildArray = array(
            'where' => ' status = 1',            
        );

        $data['pageTitle'] = 'Page Detail';
        $data['themespath'] = base_url().THEMES_PATH;
        $data['site_url'] = site_url();
        $data['content'] = $this->pm->get($param);
        $data['categorylist'] = $this->cm->gets();
        $data['menus'] = $this->mm->gets($menuArray);
        $data['menu_child'] = $this->mm->gets($menuChildArray);

        $this->twig->display($this->homePage, $data);
    }

}
