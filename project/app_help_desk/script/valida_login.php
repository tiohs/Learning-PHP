<?php
  session_start();
  
  $user_auth = false;

  $users_data = [
    ['email' => 'hs@hs', 'password' => '1234', 'name' => 'Hamilton Silva'],
    ['email' => 'hs@hs', 'password' => '1234', 'name' => 'Tio HS']
  ];

  foreach($users_data as $user) {
    if($user['email'] === $_POST['email'] and $user['password'] === $_POST['password']){
      $user_auth = true;
      $_SESSION['token'] = true;
      $_SESSION['username'] = $user['name'];
    }
  }
  
  $user_auth ? header('Location: ../home.php') : header('Location: ../index.php?login=erro');

?>