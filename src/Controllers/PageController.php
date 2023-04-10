<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QD\Controllers;

use \QD\Models\User;
use \QD\Models\Book;

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

    public function library() {
        $books = Book::where(["deleted" => false])->get();
        return ["library.html", ["books" => $books]];
    }

    public function favorites() {
        $books = Book::where(["favorite" => true])->where(["deleted" => false])->get();
        return ["library.html", ["books" => $books]];
    }

    public function book() {
        $id = $this->vars["id"];
        $book = Book::where(["deleted" => false])->where(["id" => $id])->first();

        if (!$book) {
            $response = new \Http\HttpResponse();
            $response->setStatusCode(404);
            return "404.html";
        }

        return ["book.html", ["book" => $book]];
    }

}
