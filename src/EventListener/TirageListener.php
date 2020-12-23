<?php
// src/EventListener/TirageListener.php

namespace App\EventListener;

use App\Events;
use Symfony\Component\EventDispatcher\GenericEvent;

class TirageListener
{
    public function doSomething(GenericEvent $evt) {
        var_dump($evt);
    }
}
?>
