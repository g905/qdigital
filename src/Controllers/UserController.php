<?php

namespace QD\Controllers;

class UserController {

    public function signup() {
        sleep(2);
        $request = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER, file_get_contents('php://input'));

        if ($request->getMethod() !== "POST") {
            return "signup.html";
        }

        $user = new \QD\Models\User();
        $valid = $user->validate($request->getParameters());

        if (count($valid->getErrors()) > 0) {
            return json_encode($valid->getErrors());
        } else {
            $valid->name = $request->getParameters()["name"];
            $valid->email = $request->getParameters()["email"];
            $valid->pass = password_hash($request->getParameters()["pass"], 1);
            $valid->save();
            return $valid->toJson();
        }
    }

    public function login() {
        sleep(2);
        $request = new \Http\HttpRequest($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER, file_get_contents('php://input'));

        if ($request->getMethod() !== "POST") {
            return "login.html";
        }

        $user = \QD\Models\User::where("email", "=", $request->getParameter("email"))->first();
        if (!$user) {
            return json_encode(["login failed"]);
        }

        if (password_verify($request->getParameter("pass"), $user->getHash())) {
            session_start();
            setcookie("uid", $user->id);
            return true;
        } else {
            return json_encode(["login failed pass"]);
        }
    }

    public function logout() {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_unset();
            session_destroy();
        }
        unset($_COOKIE["uid"]);
        setcookie('uid', null, -1, '/');
        return "login.html";
    }

}
