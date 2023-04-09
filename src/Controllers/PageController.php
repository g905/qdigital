<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QD\Controllers;

use \QD\Models\User;

/**
 * Description of PageController
 *
 * @author g905
 */
class PageController {

    private $vars;

    function __construct($vars) {
        $this->vars = $vars;
    }

    public function index() {
        $id = null;
        if (isset($this->vars["id"])) {
            $id = $this->vars["id"];
        }

        return ["index.html", ["id" => $id]];
    }

    public function testPage() {
        return "testPage.html";
    }

    public function aboutPage() {
        return "aboutPage.html";
    }

    public function invatesPage() {
        return "invatesPage.html";
    }

    public function marksPage() {
        return "marksPage.html";
    }

    public function digPage() {
        return "digPage.html";
    }

}
