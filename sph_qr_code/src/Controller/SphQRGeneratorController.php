<?php

namespace Drupal\sph_qr_code\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines VeracodeAnimatedSvgController class.
 */
class SphQRGeneratorController extends ControllerBase {

  /**
   * Display the template.
   *
   * @return array
   *   Return theme array.
   */
  public function content() {
    return [
      '#theme' => 'sph_qr_code'
    ];
  }

}