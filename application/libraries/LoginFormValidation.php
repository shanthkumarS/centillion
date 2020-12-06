<?php

class LoginFormValidation extends CI_Form_validation
{
    /**
     * overriding default error_array method
     *
     * @return void
     */
    public function error_array()
    {
       return $this->_error_array;
    }
}