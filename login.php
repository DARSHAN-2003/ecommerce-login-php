<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "config.php";

    $username = $_POST["user"];
    $password = $_POST["pass"];

    if($password) {
        $sql = "INSERT INTO `user` (`email`, `password`) VALUES ('$username', '$password')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            $err = false;
        }

    }
  }
   


?>

<!DOCTYPE html>
 <html lang="en">
    <head>
        <link rel="stylesheet" href="index.css">
        <title>darshan first login page</title>
    </head>
    <body>
        <section>
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="POST">
                        <h2>login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>

                            <input type="email" name="user" required>
                            <label for="">Email</label>

                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>

                            <input type="password" name="pass" required>
                            <label for="">password</label>

                        </div>
                        <div class="forget">
                            <label for=""><input type="checkbox">Remember me  <a href="#">Forget password</a></label>
                           
                        </div>
                        <button>Log in</button>
                        <div class="register">
                            <p>dont have a account <a href="#">register</a></p>
                        </div>
                    </form>
                </div>

            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
 </html>



