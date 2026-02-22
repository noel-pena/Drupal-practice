<?php

namespace Drupal\webinar_tweaks\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Webinar Tweaks module.
 */
class FirstController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function simpleContent() {
    return [
      '#markup' => $this->t('Hello from my custom page!'),
    ];
  }

  public function variableContent($name_1, $name_2) {
    return [
      "#markup" => $this->t('@name1 and @name2 say hello to you!',
        ['@name1' => $name_1, '@name2' => $name_2]),
    ];
  }
}