<?php

class User{

    public string $id;

    public function __construct(

        public string $mail,
        public string $first_name,
        public string $last_name,
        public string $password,
        public string $password2,

    )
    {
    }

    public function verify(): bool
    {
        $isValid = true;

        if ($this->mail === '' || $this->first_name === '' || $this->last_name === '') {
        $isValid = false;
        }

        if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
            $isValid = false;
        }

        if ($this->password === '' || $this->password != $this->password2) {
            $isValid = false;
        }

        return $isValid;
    }

}