<?php

namespace QD\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

    public function fromRequest($book) {

        $this->uid = $book["uid"];

        if (isset($book["title"])) {
            $this->title = $book["title"];
        }
        if (isset($book["description"])) {
            $this->description = $book["description"];
        }
        if (isset($book["authors"]) && count($book["authors"]) > 0) {
            $authors = implode(", ", $book["authors"]);
            $this->authors = $authors;
        }
        $this->favorite = false;

        return $this;
    }

}
