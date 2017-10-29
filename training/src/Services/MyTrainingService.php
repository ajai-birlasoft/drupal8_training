<?php

namespace Drupal\training\Services;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MyTrainingService {
  
  
    public $database = '';
    
    public function __construct() {
      $this->database = \Drupal::database();
    }
    // This method returns data based on an NID
    public function getNode($nid = "") {
      
      
      if ($nid) {
//        $entity = \Drupal::entityTypeManager();
//        kint($entity);die;
//         $query = $this->database->query("Select * from {node__body} WHERE entity_id=:nid", [':nid'=> $nid]);
//         kint($query->fetchAll());die;
            return json_encode([
                'title' => 'This is NID',
                'content' => 'This is Node Content'
            ]);
        }
    }

    // This method returns data based on multiple node ids.
    public function getNodes($nids = []) {
        if ($nids) {
            return json_encode(
                    [
                        [
                            'title' => 'This is NID',
                            'content' => 'This is Node Content'
                        ],
                        [
                            'title' => 'This is NID',
                            'content' => 'This is Node Content'
                        ]
                    ]
            );
        }
    }

}
