<?php

namespace Drupal\webinar_tweaks\Service;

/**
 * Service to handle webinar title logic.
 */
class WebinarTitleManager {

  /**
   * Fixes the webinar title by adding the prefix if missing.
   *
   * @param string $title
   * The original title.
   *
   * @return string
   * The fixed title.
   */
  public function fixTitle(string $title): string {
    $prefix = "Webinar: ";

    if (!str_starts_with($title, $prefix)) {
      $title = $prefix . $title;
    }

    return $title;
  }
}