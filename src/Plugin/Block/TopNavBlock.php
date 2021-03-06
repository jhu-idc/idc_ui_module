<?php

namespace Drupal\idc_ui_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Top Nav' Block.
 *
 * @Block(
 *   id = "top_nav_block",
 *   admin_label = @Translation("Top nav block"),
 *   category = @Translation("Custom"),
 * )
 */
class TopNavBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $logged_in = \Drupal::currentUser()->isAuthenticated();

    return [
      '#theme' => 'top_nav_template',
      '#logged_in' => $logged_in,
    ];
  }

}
