<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author Khalid_Mac
 */
class Model {
    
    public $table ;
     public $db ;
     public $id ;
    
    
    
   public function read($field = null){
        
        if ($field == null)  $field ="*";
        
        
        $sql = "SELECT $field FROM ".$this->table." WHERE id=".$this->id;
        $statement =$this->db->query($sql);
        $resultat =$statement->fetch(PDO::FETCH_ASSOC);
        // on va charger l"objet des champ quand on apelle ma méthode 
        foreach ($resultat as $key=>$value) {
            // on veut faire $objet->name ou $objet->position
            $this->$key=$value;// objet appelle la clé il obtient la valeur
            
        }
        
        return $resultat;
        
    }
    
    static function load($name){
        include("model/$name.php");
        return new $name;
        
    }
    
}
