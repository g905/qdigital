<?php

namespace QD\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    private $errors = [];

    public function books() {
        return $this->hasManyThrough(\QD\Models\Book::class, \QD\Models\UsersBooks::class, "user_id", "id");
    }

    public function validate($data) {
        $this->errors = [];
        if (!(isset($data["name"])) || trim($data["name"]) === "") {
            $this->errors[] = ["msg" => "name missing"];
        }
        if (!(isset($data["email"])) || trim($data["email"]) === "") {
            $this->errors[] = ["msg" => "email missing"];
        }
        if (!(isset($data["pass"])) || trim($data["pass"]) === "") {
            $this->errors[] = ["msg" => "pass missing"];
        }
        if (!(isset($data["confirm"])) || trim($data["confirm"]) === "") {
            $this->errors[] = ["msg" => "confirm missing"];
        }

        if ((isset($data["confirm"]) && isset($data["pass"]) && $data["pass"] !== $data["confirm"])) {
            $this->errors[] = ["msg" => "confirm does not match"];
        }
        if ($this->getByEmail($data["email"])) {
            $this->errors[] = ["msg" => "email already exists"];
        }

        return $this;
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getByEmail($email) {
        return (bool) count(self::where("email", "=", $email)->get());
    }

    public function getHash() {
        return $this->pass;
    }

    public static function isLoggedIn() {
        return isset($_COOKIE["uid"]);
    }

    public static function current() {
        if (isset($_COOKIE["uid"])) {
            return self::find($_COOKIE["uid"]);
        };
        return false;
    }

}
