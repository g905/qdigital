<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace QD\Models;

/**
 * Description of OrderForm
 *
 * @author g905
 */
class OrderForm {

    private $required = [
        "fio",
        "phone",
        "email"
    ];
    private $optional = [
        "fio",
    ];
    private $errors = [];
    private $values = [];

    public function getRequired() {
        return $this->required;
    }

    public function validate($data) {
        foreach ($this->required as $field) {
            if (empty($data[$field]) && !in_array($field, $this->optional)) {
                $this->errors[] = $field;
            } else {
                $this->values[$field] = $data[$field];
            }
        }
        return $this;
    }

    public function save() {
        //do something. for instance save to database
        $this->sendEmail();
    }

    private function sendEmail() {
        $to = 'breakestra@yandex.ru';
        $subject = 'Новая заявка с формы обратной связи';
        $message = $this->values["fio"] . " чето хочет";
        $headers = 'From: crime.person@gmail.com' . "\r\n" .
                'Reply-To: crime.person@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
    }

    public function toJson() {
        return json_encode(["errors" => $this->errors, "values" => $this->values]);
    }

    public function getErrors() {
        return $this->errors;
    }

    public function getValues() {
        return $this->values;
    }

}
