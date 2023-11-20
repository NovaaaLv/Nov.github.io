<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
  crossorigin="anonymous"
  />
<link rel="stylesheet" href="style.css" />
<?php
  define('BASEPATH', true); //access connection script if you omit this line file will be blank
  require 'db.php'; //require connection script
  
   if(isset($_POST['submit'])){  
    try {
  	  $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  	  $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
  
     $user = $_POST['username'];
     $email = $_POST['email'];
     $pass = $_POST['password'];
     
     //encrypt password
     $pass = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
  	
     //Check if username exists
     $sql = "SELECT COUNT(username) AS num FROM tbl_login_reg WHERE username =      :username";
     $stmt = $pdo->prepare($sql);
  
     $stmt->bindValue(':username', $user);
     $stmt->execute();
     $row = $stmt->fetch(PDO::FETCH_ASSOC);
  
     if($row['num'] > 0){
  	   echo '<script>alert("Username already exists")</script>';
    }
    
   else{
  
   $stmt = $dsn->prepare("INSERT INTO tbl_login_reg (username, email, password) 
   VALUES (:username,:email, :password)");
   $stmt->bindParam(':username', $user);
   $stmt->bindParam(':email', $email);
   $stmt->bindParam(':password', $pass);
   
   
  
  if($stmt->execute()){
   echo '<script>window.location.replace("register_success.php");</script>';
  }else{
   echo '<script>window.location.replace("register_error.php");</script>';
  }
  }
  }catch(PDOException $e){
   $error = "Error: " . $e->getMessage();
   echo '<script type="text/javascript">alert("'.$error.'");</script>';
  }
    }
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="styletest.css" />
  </head>
  <body>
    <section>
      <div class="wrap">
        <form action="register.php" method="post">
          <ul class="login-section">
            <li class="item-section aside">
              <img
                src="https://i.pinimg.com/originals/43/83/e6/4383e6d479717ff2347d5d0986fef11b.jpg"
                alt=""
                width="100%"
                height="100%"
                style="object-fit: cover"
              />
            </li>
            <li class="item-section main">
              <ul class="login-section flex-column">
                <li class="flex-column img-login">
                  <img src="Assets/login-logo.svg" alt="" width="85px" />
                  <label for="img-login">Join With NFM Admin</label>
                  <input
                    type="file"
                    name=""
                    id="img-login"
                    class="inp-field inp-img"
                  />
                </li>
                <li>
                  <input
                    type="text"
                    name="username"
                    id="username"
                    class="inp-field"
                    placeholder="Username"
                  />
                </li>
                <li>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="inp-field"
                    placeholder="Email"
                  />
                </li>
                <li>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="inp-field"
                    placeholder="Password"
                  />
                </li>
                <ul class="login-section text-end" style="margin-left: 249px">
                  <li>
                    <button type="submit" name="submit" style="padding: 0px 10px 0px 10px" class="btn-submit">Submit</button>
                  </li>
                </ul>
              </ul>
            </li>
          </ul>
        </form>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>