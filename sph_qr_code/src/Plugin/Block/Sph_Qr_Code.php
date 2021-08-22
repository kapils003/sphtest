<?php

namespace Drupal\sph_qr_code\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'SPH QR Code' Block.
 *
 * @Block(
 *   id = "sph_qr_code",
 *   admin_label = @Translation("SPH QR Code"),
 *   category = @Translation("SPH QR Code"),
 * )
 */
class Sph_Qr_Code extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'sph_qr_code',
    ];
  }

}
