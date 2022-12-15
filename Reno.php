<?php
class Renovation {
    public function __construct(

        public string $productName,
        public string $description,
        public string $reservationDate,
        public string $inStore,
        public string $userId,
    )
    {
    }

    public function verify(){
        return $this->inStore === "0" || $this->$inStore === "1";
    }
}