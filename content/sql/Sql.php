<?php
require_once 'DbConnect.php';
    class Sql extends DbConnect{
        public function getNav(){
          $request = $this->_pdo->query('SELECT * FROM section_nav');  
          $request->execute();
          $navBar = $request->fetchAll();
          return $navBar[0];         
        }

        public function setNav($logo,$item_1,$item_2,$item_3,$item_4,$title,$calendly){
          $request = $this->_pdo->prepare('INSERT INTO section_nav (item_logo, item_1, item_2, item_3, item_4, title ,calendly ) VALUES (:logo, :item_1, :item_2, :item_3, :item_4, :title, :calendly)'); 
          $request->execute([
            ':logo'=>$logo,
            ':item_1'=>$item_1,
            ':item_2'=>$item_2,
            ':item_3'=>$item_3,
            ':item_4'=>$item_4,
            ':title'=>$title,
            ':calendly'=>$calendly
          ]);
        }


    }