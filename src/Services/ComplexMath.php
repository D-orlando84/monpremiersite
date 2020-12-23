<?php
//src/Services/ComplexMath.php

namespace App\Services;

class ComplexMath{
    const PI=3.141592653589793238;
    private $mode;
    private $lastOperation;

    public function __construct($m="rad") {
        $this->mode = $m;
        $this->lastOperation="";
    }
    
    public function getMode() {
        return $this->mode;
    }

    public function setMode($m="rad") {
        $this->mode= $m;
    }
    
}
?>