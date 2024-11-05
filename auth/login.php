<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php
     if(isset($_SESSION['username']))
     {
       header("location: ".APPURL."");
     }
     if(isset($_POST['submit']))
     {
        if(empty($_POST['email']) OR empty($_POST['password']))
        {
            echo"<script>alart('one or more inputs are empty');<script>";
        }
        else
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $login = $conn->query("SELECT * FROM users WHERE email ='$email'");
            $login->execute();
            $fetch = $login->fetch(PDO::FETCH_ASSOC);
            if ($login->rowCount() > 0)
            { 
                if(password_verify($password, $fetch['mypassword']))
                {
                  $_SESSION['username'] = $fetch['username'];
                  $_SESSION['user_id'] = $fetch['id'];

                  header("location: ".APPURL."");
                }
                else 
                {
                    echo"<script>alart('passwor or email is wrong');<script>";  

                }
            }
            else
            {
                echo"<script>alart('passwor or email is wrong');<script>";  
   
            }

        }
      }
      ?>
<div class="login-box">
     
<div class="longin-header">
    <header>login</header>
</div>
<div class="input-box">
    <input type="text" class="input-field" placeholder="Email" autocomplete="off" required>
</div>
<div class="input-box">
    <input type="password" class="input-field" placeholder="Password" autocomplete="off" required>
</div>
<div class="forgot">
    <section>
    <input type="checkbox" id="check">
    <label for="check">Remember me</label>
    </section>
    <section>
    <a href="#">Forgot password</a>
    <section>
</div>
<div class="input-submit">
<button class="submit-btn" id="submit">log in</button>
<label for="submit"></label>
</div>
<div class="register-link">
    <p>Don't have account? <a herf="#">Sing Up</a></p>
</div>
</div>
</div>
   
<?php require "../includes/footer.php"; ?>

