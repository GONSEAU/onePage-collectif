<nav class="navbar navbar-expand-lg  navbar-light justify-content-center fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand mx-auto "  href="#"> <img src="assets/img/<?php echo $navBar['item_logo']; ?>.png" alt="" width="100" height="100" class="logo d-inline-block"></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mx-l"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto   navbar-light ">  
        <li class="nav-item ">
          <a class="nav-link" aria-current="page" href="#apropos"><?php echo $navBar['item_1']; ?></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#teamBarber"><?php echo $navBar['item_2']; ?></a>
        </li>
        <h1 class="title"><?php echo $navBar['title']; ?></h1>
        <li class="nav-item ">
          <a class="nav-link" href="#nosRealisations"><?php echo $navBar['item_3']; ?></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#contact"><?php echo $navBar['item_4']; ?></a>
        </li>
      </ul>
    </div>
    <button id="calendly-btn" class="btn-lg btn-outline-light mx-auto" type="submit">Réservation <i class="far fa-calendar-check"></i></button>
  </div>
</nav>



