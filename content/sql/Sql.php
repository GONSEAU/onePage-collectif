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

      // Update
      // $request->execute([
      //   ':logo' => $logo,
      //   ':item_1' => $item_1,
      //   ':item_2' => $item_2,
      //   ':item_3' => $item_3,
      //   ':item_4' => $item_4,
      //   ':title' => $title,
      //   ':calendly' => $calendly
      // ]);
    
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
