<?php

namespace Drupal\webform_cac\Element;

use Drupal\webform\Element\WebformContact;

/**
 * Provides a form element for a contact element
 *
 * @FormElement("webform_contact_cac")
 */
class ContactCac extends WebformContact {

  /**
   * {@inheritdoc}
   */
  public static function getCompositeElements() {
    $elements = [];
    $elements += parent::getCompositeElements();
    $elements['dob'] = [
      '#type' => 'date',
      '#title' => t('Date of Birth'),
    ];
    $elements['shares'] = [
      '#type' => 'number',
      '#title' => t('Shares %'),
    ];

    $elements['identification_fid'] = [
      '#title' => t('Identification'),
      '#type' => 'managed_file',
      '#upload_validators' => [
        'file_validate_extensions' => ['gif png jpg jpeg'],
      ],
    ];


    return $elements;
  }

}
