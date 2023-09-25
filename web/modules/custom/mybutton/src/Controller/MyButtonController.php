<?php

namespace Drupal\mybutton\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class MyButtonController extends ControllerBase {

  protected $button;

  public function __construct() {
    // Define the button element.
    $this->button = [
      '#type' => 'html_tag',
      '#tag' => 'button',
      '#value' => $this->t('Click this button'),
      '#attributes' => [
        'id' => 'mybutton',
        'onclick' => 'alert("Button clicked")',
      ],
    ];
  }

  public function content() {
    // Render the button element.
    $output = \Drupal::service('renderer')->render($this->button);

    // Return a Response object with the rendered button.
    return new Response($output);
  }
}
