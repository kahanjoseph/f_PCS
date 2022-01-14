<?php
class Address{
    private $street;
    private $city;
    private $state;
    private $zip;

    public function print(){
        echo $this->street . $this->city . $this->state . $this->zip;
    }

    function __construct($street = 'random', $city = 'toronto', $state = 'ontario', $zip = 'cfdgfx') {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

}

?>