<?php include_once "header.php"; ?>

<section class="hero">
  <div class="container hero__container">
    <div class="hero__details">
      <h1 class="hero__intro">Catalog<br>Online</h1>
      <form action="./includes/login.inc.php" class="login__form">
        <input type="text" class="login__input" placeholder="username">
        <input type="text" class="login__input"placeholder="password">
        <button class="login__btn">Log In</button>
        <a href="signup.php" class="login__btn btn-signup">Sign Up</a>
      </form>
    </div>
  </div>
</section>

<?php include_once "footer.php"; ?>
