<?php

namespace application\models;

use application\core\Model;

class Main extends Model {
    
    public function getNews() {
        //$params = [
        //    'id' => 2
        //];
        //$result = $this->db->row('SELECT name, description FROM users WHERE id = :id AND name= :name', $params);
        $result = $this->db->row('SELECT title, description FROM news');
        
        return $result;
    }
    
}
