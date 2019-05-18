<?php include_once "header.php"; ?>

<form action="./includes/signup.inc.php" class="signup__form">
    <h2 class="signup__intro">Welcome ! Please register here.</h2>
    <input type="text" class="signup__input" placeholder="First Name" required>
    <input type="text" class="signup__input" placeholder="Last Name" required>
    <input type="email" class="signup__input" placeholder="E-mail" required>
    <input type="text" class="signup__input" placeholder="username" required>
    <input type="text" class="signup__input" placeholder="password" required>
    <button type="submit" class="signup__btn btn-signup">Sign Up</button>
</form>
<?php include_once "footer.php"; ?>