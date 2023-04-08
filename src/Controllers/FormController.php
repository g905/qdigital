<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QD\Controllers;

/**
 * Description of FormController
 *
 * @author g905
 */
class FormController {

    public function index() {
        sleep(2);
        $form = new \QD\Models\OrderForm();
        $valid = $form->validate($_POST);
        if (count($valid->getErrors()) > 0) {
            http_response_code(500);
        } else {
            $valid->save();
            http_response_code(200);
        }
        return $valid->toJson();
    }

}
