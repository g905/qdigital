<?php

namespace QD\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    private $errors = [];

    public function validate($data) {
        $this->errors = [];
        if (!(isset($data["name"])) || trim($data["name"]) === "") {
            $this->errors[] = ["msg" => "missing"];
        }
        if (!(isset($data["email"])) || trim($data["email"]) === "") {
            $this->errors[] = ["msg" => "missing"];
        }
        if (!(isset($data["pass"])) || trim($data["pass"]) === "") {
            $this->errors[] = ["msg" => "missing"];
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
        return self::find($_COOKIE["uid"]);
    }

}
