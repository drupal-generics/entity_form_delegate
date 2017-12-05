<?php

namespace Drupal\entity_form_delegate;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Interface for the node form alter plugin.
 *
 * @package Drupal\node_form_delegate
 */
interface EntityFormDelegatePluginInterface {

  /**
   * Alters the node form build.
   *
   * @param array $form
   *   The form render array.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   Current form state.
   */
  public function buildForm(array &$form, FormStateInterface $formState);

  /**
   * Extends node form validation.
   *
   * @param array $form
   *   The form render array.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   Current form state.
   */
  public function validateForm(array &$form, FormStateInterface $formState);

  /**
   * Extends node form submissions.
   *
   * @param array $form
   *   The form render array.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   Current form state.
   */
  public function submitForm(array &$form, FormStateInterface $formState);

  /**
   * Set the form node.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The node.
   */
  public function setEntity(EntityInterface $entity);

  /**
   * Get the form node.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   *   The node.
   */
  public function getEntity();

  /**
   * Checks if original submit is interrupted.
   *
   * @return mixed
   *   The alter plugin value.
   */
  public function shouldPreventOriginalSubmit();

}
