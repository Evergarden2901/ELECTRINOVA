<?php

    session_start();
    include('server.php');
    $data_user_group = isset($_SESSION['group']) ? $_SESSION['group'] : null;
    $data_user_username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $data_user_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col items-center space-y-16">
  <div class="w-full bg-red-500 py-8">
    <h1 class="text-white text-5xl font-bold text-center">WELCOME!</h1>
  </div>

  <img
    src="ponyo039.jpg"
    alt="Profile"
    class="rounded-full border-4 border-red-400 w-40 h-40 object-cover"
  />
  
  <h2 class="text-3xl font-semibold text-gray-800">HELLO! <span><?php echo $data_user_username; ?></span></h2>

  <div class="flex space-x-12">
    <a href="index.php" target="_self" ><button class="bg-blue-500 text-white text-lg px-7 py-4 rounded-full shadow-lg" type="button">
      GO TO HOME</button></a>

      <a href="logout_db.php" target="_self" ><button class="bg-red-100 text-red-500 text-lg px-7 py-4 rounded-full shadow-lg border border-red-300">
      LOG OUT
    </button></a>
  </div>
</body>
</html>
