<?php
  $user_auth = false;

  $users_data = [
    ['email' => 'hs@hs', 'password' => '1234'],
    ['email' => 'hs@hs', 'password' => '1234']
  ];

  foreach($users_data as $user) {
    if($user['email'] === $_POST['email'] and $user['password'] === $_POST['password']){
      $user_auth = true;
    }
  }
  
  echo $user_auth ? 'Active' : header('Location: index.php?login=erro');

?>