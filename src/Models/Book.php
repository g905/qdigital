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
        $this->deleted = false;

        return $this;
    }

    public function isFavorite($user_id) {
        $fav = \QD\Models\UsersFavs::where(["user_id" => $user_id, "book_id" => $this->uid])->first();
        return (bool) $fav;
    }

}
