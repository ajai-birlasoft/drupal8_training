<?php

namespace Drupal\training\Form;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Drupal\Core\Form\ConfigFormBase;

class TrainingConfigForm extends ConfigFormBase {

    public function buildForm(array $form, \Drupal\Core\Form\FormStateInterface $form_state) {
        $config = $this->config('training.api_settings');
        
        $form['api_key'] = [
            '#type' => 'textfield',
            '#title' => t('API Key'),
            '#required' => TRUE,
            '#default_value' => !empty($config->get('api_key')) ? $config->get('api_key') : ''
        ];
//        kint(\Drupal::service('training.node_json'));die;
        return parent::buildForm($form, $form_state);
    }

    public function getFormId() {
        return 'training_config_form';
    }

    protected function getEditableConfigNames() {
        
    }
    
    /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, \Drupal\Core\Form\FormStateInterface $form_state) {
    $values = $form_state->getValues();
    
    if (!empty($values)) {
        // checking if the api value is not empty.
        $api_key = isset($values['api_key']) ?  $values['api_key'] : "";
        // update config keys.
        $config = $this->configFactory()->getEditable('training.api_settings'); 
        $config->set('myname', 'Divesh Kumar');
        $config->set('api_key', $api_key)->save();
    }
      /*$this->config('system.site')
      ->set('name', $form_state->getValue('site_name'))
      ->set('mail', $form_state->getValue('site_mail'))
      ->set('slogan', $form_state->getValue('site_slogan'))
      ->set('page.front', $form_state->getValue('site_frontpage'))
      ->set('page.403', $form_state->getValue('site_403'))
      ->set('page.404', $form_state->getValue('site_404'))
      ->save();
*/

    parent::submitForm($form, $form_state);
  }

}
