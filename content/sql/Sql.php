<?php
require_once 'DbConnect.php';
class Sql extends DbConnect
{

  public function getNav()
  {
    $request = $this->_pdo->query('SELECT * FROM section_nav');
    $request->execute();
    $navBar = $request->fetchAll();
    if(!empty($navBar)){
    return $navBar[0];
    }else{
    return $navBar;
    } 
  }
  public function getSectionApropos()
  {
    $request = $this->_pdo->query('SELECT * FROM section_apropos');
    $request->execute();
    $Apropos = $request->fetchAll();
    if(!empty($Apropos)){
    return $Apropos[0];
    }else{
    return $Apropos;
    } 
  }
  public function getSectionTeam()
  {
    $request = $this->_pdo->query('SELECT * FROM section_team');
    $request->execute();
    $teamCard = $request->fetchAll();  
    return $teamCard;
  }

  public function setNav($logo, $item_1, $item_2, $item_3, $item_4, $title, $calendly)
  {
    
    $navBar = $this->getNav();

    if (empty($navBar)) {
      // Insert
      $request = $this->_pdo->prepare('INSERT INTO section_nav (id, item_logo, item_1, item_2, item_3, item_4, title ,calendly ) VALUES (1, :logo, :item_1, :item_2, :item_3, :item_4, :title, :calendly)');
    }else{ //update
      $request = $this->_pdo->prepare('UPDATE section_nav SET item_logo = :logo, item_1 = :item_1, item_2 = :item_2, item_3 = :item_3, item_4 = :item_4, title = :title, calendly = :calendly WHERE id=1');
    } 
      $request->execute([
        ':logo' => $logo,
        ':item_1' => $item_1,
        ':item_2' => $item_2,
        ':item_3' => $item_3,
        ':item_4' => $item_4,
        ':title' => $title,
        ':calendly' => $calendly
      ]);

    
  }
  public function setSectionApropos($title, $first_image, $first_text, $second_image, $second_text, $title_text_1, $title_text_2)
  {
    
    $Apropos = $this->getSectionApropos();

    if (empty($Apropos)) {
      // Insert
      $request = $this->_pdo->prepare('INSERT INTO section_apropos (id, title, first_image, first_text, second_image, second_text, title_text_1 ,title_text_2 ) VALUES (1, :title, :first_image, :first_text, :second_image, :second_text, :title_text_1, :title_text_2)');
    }else{ //update
      $request = $this->_pdo->prepare('UPDATE section_apropos SET title = :title, first_image = :first_image, first_text = :first_text, second_image = :second_image, second_text = :second_text, title_text_1  = :title_text_1 , title_text_2 = :title_text_2 WHERE id=1');
    } 
      $request->execute([
        ':title' => $title,
        ':first_image' => $first_image,
        ':first_text' => $first_text,
        ':second_image' => $second_image,
        ':second_text' => $second_text,
        ':title_text_1' => $title_text_1,
        ':title_text_2' => $title_text_2
      ]);
  }

  public function setSectionTeam($photo_member, $name_member, $text_member, $facebook_member, $twitter_member, $insta_member )
  {
    
    $Apropos = $this->getSectionTeam();

    if (empty($Apropos)) {
      // Insert
      $request = $this->_pdo->prepare('INSERT INTO section_team (id, photo_member, name_member, text_member, facebook_member, twitter_member, insta_member ) VALUES (1, : photo_member, :name_member, :text_member, :facebook_member, :twitter_member, :insta_member)');
    }else{ //update
      $request = $this->_pdo->prepare('UPDATE section_team SET photo_member = :photo_member, name_member = :name_member, text_member = :text_member, facebook_member = :facebook_member, twitter_member = :twitter_member, insta_member  = :insta_member  WHERE id=1');
    } 
      $request->execute([
        ':photo_member' => $photo_member,
        ':name_member' => $name_member,
        ':text_member' => $text_member,
        ':facebook_member' => $facebook_member,
        ':twitter_member' => $twitter_member,
        ':insta_member' => $insta_member       
      ]);
  }

  public function newAdmin($userName,$password) {
    $req = $this->_pdo->prepare('INSERT INTO admin (userName,password) VALUE(:userName,:password)');
    $req->execute([
        ':userName' => $userName,
        ':password' => $password
    ]);
  }

  public function getAdmin($userName)
  {
    $request = $this->_pdo->prepare('SELECT * FROM admin WHERE userName = :userName');
    $request->execute([
      ':userName' => $userName
    ]);
    $admin = $request->fetchAll();
    if(!empty($admin)){
    return $admin[0];
    }else{
    return $admin;
    }
  }

}
