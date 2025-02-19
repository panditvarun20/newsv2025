<?php

declare(strict_types=1);

namespace Drupal\dmd\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for dmd routes.
 */
final class DmdController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Controller works!'),
    ];

    return $build;
  }

}
