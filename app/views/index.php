<!DOCTYPE html>
<html>
<head>
  <title>My blog</title>
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div class="container">
  <h1>Blog</h1>

   <?php foreach ($allUsers as $user) : ?>-
     <div class="article">
       <h2><?= $user->getCreatedAtCarbon() ?></h2>
       <h4><?= $user->getUpdateAtCarbon() ?></h4>
       <p><?= $user->getFullName() ?></p>
       <p><?= $user->getEmail() ?></p>
       <p><?= $user->getPassword() ?></p>
     </div>
   <?php endforeach ?>

</div>
</body>
</html>
