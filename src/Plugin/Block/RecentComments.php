<?php

/**
 * @file
 * Contains \Drupal\reactjs_example\Plugin\Block\RecentComments.
 */

namespace Drupal\reactjs_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'RecentComments' block.
 *
 * @Block(
 *  id = "recent_comments",
 *  admin_label = @Translation("Recent comments"),
 * )
 */
class RecentComments extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['recent_comments']['#markup'] = '<div id="recent-comments"></div>';
    $build['#attached']['library'][] = 'reactjs_example/recent.comments';

    return $build;
  }

}
