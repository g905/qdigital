<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QD\Controllers;

use \Http\HttpRequest as Request;
use \Http\HttpResponse as Response;
use Template;

/**
 * Description of TestController
 *
 * @author g905
 */
class ViewController {

    public function process(Request $request, Response $response, $handler, $vars) {

        $a = explode("@", $handler);
        $a[0] = "QD\Controllers\\" . $a[0];

        if ($request->getMethod() == "POST") {
            $response->setHeader('Content-Type: application/json', false);
            $response->setContent(call_user_func([new $a[0]($vars), $a[1]]));
            return $response;
        } else {

            $page = call_user_func([new $a[0]($vars), $a[1]]);

            $pageName = is_array($page) ? $page[0] : $page;
            $vars = is_array($page) && count($page) > 1 ? $page[1] : [];

            $response->setContent(file_get_contents(Template::view($pageName, $vars)));
        }
    }

}
