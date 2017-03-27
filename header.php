<!-- NAV -->

<?php include_once ("controllers/header-controller.php"); ?>

<nav>
  <div class="top-nav">
    <div class="container">
      <div class="title">
        <a href="" >TEN GREEN BOTTLES</a>
      </div>  
      <div class="login">
        <ul>
          <li><a href=""><span class="fa fa-search"></span></a></li>
          <?php if($currentuser) : ?>
          <li>Hello, <?= $currentuser->forename ?></li>
            <li><a href="logout-page.php">Log out</a></li>
          <?php else: ?>
          <li><a href="login-page.php">LOGIN or REGISTER</a></li>
          <?php endif ?>
        
        </ul>
      </div>
    </div>
  </div>
  <div class="bottom-nav">
    <div class="container">
      <ul class="nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="product-archive.php">Wines</a></li>
          <?php if($current_user->isadmin) { ?>
      <li><a href="manage-wine.php">Manage Wines</a></li>
          <?php } ?>
      </ul>
      <ul class="lists">
        <li class="wish"><a href="">
          <icon class="fa fa-star-o"></icon>
          <span><?= count($wishlist) ?></span>
          </a>
        </li>
        <li class="basket"><a href="basket.php">
          <icon class="fa fa-shopping-cart"></icon>
          <span><?= count($basket) ?></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- END OF NAV -->