<?php

declare(strict_types=1);

namespace Drupal\dmd\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a dmd_example block.
 */
#[Block(
  id: 'dmd_dmd_example',
  admin_label: new TranslatableMarkup('dmd_example'),
  category: new TranslatableMarkup('Custom'),
)]
final class DmdExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
