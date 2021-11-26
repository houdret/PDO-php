<?php

namespace PDO;

class Validator
{

    public function valString($string){
        if (true === filter_var($string, FILTER_VALIDATE_INT)) {
            $validate = false;
        } else {
            $validate = true;
        }
        return $validate;
    }

    public function valInt($int){
        if (false === filter_var($int, FILTER_VALIDATE_INT)) {
            $validate = false;
        } else {
            $validate = true;
        }
        return $validate;
    }

    public function valFloat($float){
        if (false === filter_var($float, FILTER_VALIDATE_FLOAT)) {
            $validate = false;
        } else {
            $validate = true;
        }
        return $validate;
    }
}