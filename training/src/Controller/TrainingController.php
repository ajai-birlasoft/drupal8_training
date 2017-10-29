<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Drupal\training\Controller;

use Drupal\Core\Controller\ControllerBase;

class TrainingController extends ControllerBase{
    /**
     * This method would return the content as an output.
     * @return string
     */
    public function content() {
        return [
            '#markup' => t("Hi! I am learning custom module development."),
        ];
    }
    
    public function another_content($api_key) {
        return [
            '#markup' => t("Hi! I am using the [@api_key_var]", ['@api_key_var' => $api_key]),
        ];
    }
}

