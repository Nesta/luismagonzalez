<?php
/**
 * @file
 * Contains \Drupal\luismagonzalez\Plugin\Block\LuismaGonzalezProfileBlock.
 */
namespace Drupal\luismagonzalez\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block for profile info
 *
 * @Block(
 *   id = "profile_block",
 *   admin_label = @Translation("Example: Profile block")
 * )
 */
class LuismaGonzalezProfileBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#type' =>'markup',
      '#markup' => $this->t('Hi world!'),
    );
  }
}