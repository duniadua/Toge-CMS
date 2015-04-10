<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArchiveController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class ArchiveController extends CI_Controller {

    private $listPage = 'homebase.html.twig';

    public function __construct() {
        parent::__construct();
        $this->load->model('Archive_Model', 'archive');
        $this->load->model('Page_Model', 'pm');
        $this->load->model('Category_Model', 'cm');
        $this->load->model('Menus_Model', 'mm');
    }

    public function byMonthYear($year,$month) {
        $param = array(
            'where' => ' YEAR(createdt)=' . $year. ' AND MONTH(createdt)='. $month,            
            'and' => ' status = 1',
        );

        $menuArray = array(
            'where' => ' status = 1',
            'and' => 'parent = 0',
        );

        $menuChildArray = array(
            'where' => ' status = 1',
        );

        $data['pageTitle'] = 'Archive';
        $data['themespath'] = base_url() . THEMES_PATH;
        $data['site_url'] = site_url();

        $data['categorylist'] = $this->cm->gets();
        $data['menus'] = $this->mm->gets($menuArray);
        $data['content'] = $this->archive->gets($param);
        $data['archivePeriod'] = $this->archive->getByMonthYear();
        $data['menu_child'] = $this->mm->gets($menuChildArray);

        $this->twig->display($this->listPage, $data);
    }

}
