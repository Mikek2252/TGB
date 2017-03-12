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
          <?php else: ?>
          <li><a>LOGIN or REGISTER</a></li>
          <?php endif ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="bottom-nav">
    <div class="container">
      <ul class="nav">
        <li><a href="">Home</a></li>
        <li><a href="">Products</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Pages</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Contact</a></li>
      </ul>
      <ul class="lists">
        <li class="wish"><a href="">
          <icon class="fa fa-star-o"></icon>
          <span><?= count($wishlist) ?></span>
          </a>
        </li>
        <li class="basket"><a href="">
          <icon class="fa fa-shopping-cart"></icon>
          <span><?= count($basket) ?></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- END OF NAV -->