<?php

namespace Drupal\entity_form_delegate\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Annotation for NodeFormAlter plugins.
 *
 * @Annotation
 */
class EntityFormDelegate extends Plugin {

  /**
   * The entity type.
   *
   * @var string
   */
  public $entity;

  /**
   * The content type of the node which to alter.
   *
   * @var string|array
   */
  public $bundle;

  /**
   * The form display ID(s) to apply to.
   *
   * Form displays can be created from the back`office for forms. These act
   * the same as view modes.
   *
   * Set '*' to make this plugin apply to all.
   *
   * @var string|array
   */
  public $display = 'default';

  /**
   * The operation(s) to apply to.
   *
   * These are defined per entity type. Check the annotation of the entity
   * type to see what operations are available.
   *
   * Set '*' to make this plugin apply to all.
   *
   * @var string|array
   */
  public $operation = 'default';

  /**
   * The priority of this alter.
   *
   * @var int
   */
  public $priority = 1;

  /**
   * Whether the original entity form submit handler should be executed.
   *
   * @var int|bool|null
   */
  public $preventOriginalSubmit = NULL;

}
