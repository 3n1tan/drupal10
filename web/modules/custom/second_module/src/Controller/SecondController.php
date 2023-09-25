<?php

namespace Drupal\second_module\Controller;

use Drupal\Core\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class SecondController {

    public function second (){
        return new Response ('Hello from my second module, looks so pretty');
    }
}