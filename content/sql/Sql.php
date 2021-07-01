<?php
require_once 'DbConnect.php';
class Sql extends DbConnect
{
  public function getNav()
  {
    $request = $this->_pdo->query('SELECT * FROM section_nav');
    $request->execute();
    $navBar = $request->fetchAll();
    return $navBar[0];
  }

  public function setNav($logo, $item_1, $item_2, $item_3, $item_4, $title, $calendly)
  {
    if (empty($navBar[0])) {

      $request = $this->_pdo->prepare('INSERT INTO section_nav (item_logo, item_1, item_2, item_3, item_4, title ,calendly ) VALUES (:logo, :item_1, :item_2, :item_3, :item_4, :title, :calendly)');
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
    } else {
      $request = $this->_pdo->prepare('UPDATE section_nav SET item_logo = :logo, item_1 = :item_1, item_2 = :item_2, item_3 = :item_3, item_4 = :item_4, title = :title, calendly = :calendly WHERE id=1');
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
  }
}
