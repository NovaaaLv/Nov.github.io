<?php
  define('BASEPATH', true); 
  require 'db.php'; 
  if(isset($_POST['submit'])){  
              $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
              $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
      $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
      $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
      
      $sql = "SELECT id, username, password FROM tbl_login_reg WHERE username = :username";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':username', $username);
      $stmt->execute();
      
      $user = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if($user === false){
        echo '<script>window.location.replace("error_login.php");</script>';
      } else{
          
          $validPassword = password_verify($passwordAttempt, $user['password']);
          
          if($validPassword){
              
              $_SESSION['tbl_login_reg'] = $username;
            echo '<script>window.location.replace("success_login.php");</script>';
              exit;
          } else{
              echo '<script>window.location.replace("error_login.php");</script>';
          }
      }
      }
  ?>