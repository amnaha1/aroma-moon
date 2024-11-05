<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php
  if(isset($_SESSION['username']))
  {
     header("location: ".APPURL."");
  }
     if(isset($_POST['submit']))
     {
        if(empty($_POST['username']) OR empty($_POST['email']) OR empty($_POST['password']))
        {
            echo"<script>alart('one or more inputs are empty');<script>";
        }
        else 
        {
            $username = $_POST['username']; 
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            
            $insert = $conn->prepare("INSERT INTO users (username, email, mypassword) 
            VALUES (:username, :email, :mypassword)");

            $insert->execute([
                  ':username' => $username,
                  ':email' => $email,
                  ':mypassword' => password_hash($password, PASSWORD_DEFAULT), 
                ]);
            
            header("location: login.php");

        }
       } 
     ?>

        <div class="regi">
            <div class="regi-user">
            <form class="form" method="POST" action="register.php">
                    <h4 class="regi-h"> Register </h4>
                    <div class="">
                        <label for="" class="">Username</label>
                        <div class="">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    <div class="">
                        <label for="staticEmail" class="email">Email</label>
                        <div class="">
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="">
                        <label for="inputPassword" class="password">Password</label>
                        <div class="">
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <button name="submit" class="submit" type="submit">Register</button>

                </form>
            </div>
        </div>
 
   

        </div>
<?php require "../includes/footer.php"; ?>