
<?php 
 require_once 'sql/Sql.php';
 $sql = new Sql;
 $navBar = $sql->getNav();
?>
<header>

<nav class="navbar navbar-expand-lg  navbar-light  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="assets/img/<?php echo $navBar['item_logo']; ?>.png" alt="" width="100" height="100" class="logo d-inline-block"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 navbar-light ">  
        <li class="nav-item padding20RL">
          <a class="nav-link" aria-current="page" href="#apropos"><?php echo $navBar['item_1']; ?></a>
        </li>
        <li class="nav-item padding20RL">
          <a class="nav-link" href="#teamBarber"><?php echo $navBar['item_2']; ?></a>
        </li>
        <h1 class="title"><?php echo $navBar['title']; ?></h1>
        <li class="nav-item padding20RL">
          <a class="nav-link" href="#nosRéalisations"><?php echo $navBar['item_3']; ?></a>
        </li>
        <li class="nav-item padding20RL">
          <a class="nav-link" href="#contact"><?php echo $navBar['item_4']; ?></a>
        </li>
      </ul>
    </div>
    <button id="calendly-btn" class="btn-lg btn-outline-light" type="submit">Réservation <i class="far fa-calendar-check"></i></button>
  </div>
</nav>
</header>