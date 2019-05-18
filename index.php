<?php include_once "header.php"; ?>

<?php 
  if(!isset($_SESSION['u_id'])){
    echo '<section class="hero">
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
  </section>';
  }
  else {
    echo '<section class="">
    <div class="wrapper">
      <nav class="sidebar">
        <h3 class="sidebar__intro">Welcome , user!</h3>
        <ul class="sidebar__list">
          <li class="sidebar__item">
            <a href="" class="sidebar__link">Prezente</a>
          </li>
          <li class="sidebar__item">
            <a href="" class="sidebar__link">Note</a>
          </li>
        </ul>
      </nav>
      <p class="test">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ut eveniet, unde nobis sed reiciendis quos nemo animi itaque asperiores deserunt laborum corporis recusandae illo dolorum. Dolorum nihil iste quod culpa modi. Nihil, consequatur. Perferendis deleniti voluptatum quibusdam tempora praesentium, ut voluptatem quo, in aperiam ullam voluptatibus! Commodi, optio fugiat ab rerum amet nihil quam numquam qui obcaecati asperiores eveniet, quas sint ipsa voluptas error autem tempore quae aliquam rem cupiditate similique fuga esse. Hic ut dolore illum nam nostrum cum modi nisi cupiditate? Ab itaque labore voluptatum at eveniet, nulla repellendus nemo quis repudiandae quaerat eaque, dolore suscipit aliquam libero minus alias facere vel distinctio dignissimos ducimus quae consequuntur! Debitis recusandae vero magnam, accusamus hic necessitatibus nulla eum non nisi illo ducimus, repellendus veniam, aspernatur voluptatibus quo id quod totam impedit repellat. Obcaecati, dicta debitis voluptatibus ea voluptas dolorem possimus ab dignissimos voluptate et ipsa numquam repellat, error aliquam delectus dolor recusandae repudiandae aspernatur nobis at porro illum cum minus animi? Voluptatibus, porro quasi possimus delectus eius illum iste consectetur quaerat, provident tenetur, nostrum voluptate ipsam distinctio reprehenderit exercitationem in inventore eligendi accusamus dolor. Veniam quasi doloribus reiciendis deleniti eos asperiores voluptatem architecto cum repellat impedit! Labore, repudiandae ullam.</p>
    </div>
  </section>';
  }
?>




<?php include_once "footer.php"; ?>
