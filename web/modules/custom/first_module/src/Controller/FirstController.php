<?php

namespace Drupal\first_module\Controller;

use Drupal\Core\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class FirstController {

    public function first (){
        return new Response ('Hello from my first drupal 10 module');
    }
}