<?php

namespace QD\Controllers;

use \QD\Models\Book;

class BookController {

    public function addBook() {
        $r = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);

        if ($r->getMethod() !== "POST") {
            return false;
        }
        $book = Book::where(["uid" => $r->getParameters()["uid"]])->first() ?? new Book(); //firstOrCreate
        $book->fromRequest($r->getParameters());
        if ($book->save()) {
            return json_encode(["status" => "ok"]);
        }
    }

    public function removeBook() {

        $r = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);

        if ($r->getMethod() !== "POST") {
            return false;
        }

        $book = Book::where(["uid" => $r->getParameter("uid")])->first();
        if ($book) {
            $book->deleted = true;
            $book->save();
        }

        $rs = new \Http\HttpResponse();
        $rs->setStatusCode(200);
        return true;
    }

    public function toggleFavorite() {
        $r = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);

        if ($r->getMethod() !== "POST") {
            return false;
        }

        $book = Book::where(["uid" => $r->getParameter("uid")])->first();
        if ($book) {
            $book->favorite = !$book->favorite;
            $book->save();
        }
        $rs = new \Http\HttpResponse();
        $rs->setStatusCode(200);
        return true;
    }

}