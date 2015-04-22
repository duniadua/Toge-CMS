<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThemesController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Exception\ParseException;

class ThemesController extends CI_Controller {

    private $parseFile = "";

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $yaml = new Parser();
        try {
            $yaml->parse(FCPATH . $this->parseFile);
            
        } catch (ParseException $e) {
            echo $e->getParsedFile();
        }
    }

}
