<?php

class Check{

    public string $id;

    public function __construct(

        public string $data1,
        public string $data2,

    )
    {
    }

    public function samedata($data1, $data2):bool
    {
        $isValid = true;
        
        if ($data1 === '' || $data1 != $data2) {
            $isValid = false;
        }

        return $isValid;
    }

}

