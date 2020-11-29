<?php include "db.php"?>
<?php
    try {
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $query = "SELECT * FROM user WHERE ";
            $query .= " email=:email AND password=:password ";
            $statement = $connection->prepare($query);
            $result = $statement->execute([
                ":email" => $_POST['email'],
                ":password" => $_POST['password'],
            ]);
            if(!$result){
                throw new Exception("<script>alert('Unable to login'); window.location.href = 'signin.php';</script>");
             } elseif ($statement->rowCount()==0){
                 throw new Exception("<script>alert('Invalid username/password'); window.location.href = 'signin.php';</script>");
             } 
             $member = $statement->fetchObject();
             $_SESSION["is_logged_in"] = true;
             $_SESSION["member"] = $member;
             echo "<script>alert('Successfully Logged In!'); window.location.href = 'index.php';</script>";
        }else{
            ?>
            <html>
  <head>
    <?php include "htmlhead.php"?>
    <link rel="stylesheet" href="signin.css" type="text/css">
    <title>libera—sign in</title>
  </head>
  <body>

    <?php include "header.php"?>

    <div class="main-body">
      <div class="left-body">
      </div>
      <div class="middle-body"></div>
      <div class="right-body">
        <h2>Sign in to your<br>account</h2>
        <div class="form">
            <form action="signin.php" method="POST">
          <p>Email Address</p>
          <input required type="email" name="email" placeholder="For Demo : almadendj@gmail.com">
          <p>Password</p>
          <input required type="password" name="password" placeholder="For Demo : password123">
          <input type="checkbox" name="rememberMe" id="remember">
          <p id="rememberMe">Remember Me</p>
          <button type="submit" name="signIn" id="signin">Sign in now</button>
          </form>
          <p id="or">Or</p>
          <input type="submit" name="googleSignIn" value="Sign in with Google" id="google"><br>
          
          <p class="signup">Dont't have an account? <a href="#" id="signup">Sign up</a><p>
        </div>
      </div>
    </div>
  </body>

  <?php include "footer.php"?>

</html>
    <?php }
    } catch (Exception $e){
        echo $e->getMessage();
    }
?>

