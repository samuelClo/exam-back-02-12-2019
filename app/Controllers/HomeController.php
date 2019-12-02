<?php
namespace App\Controllers;

use PDO;
use App\Models\User;

class HomeController
{
   public function index()
   {
      $dbHost = getenv('DB_HOST');
      $dbName = getenv('DB_NAME');
      $dbUser = getenv('DB_USER');
      $dbPassword = getenv('DB_PASSWORD');

      $db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPassword);

      $query = $db->query('SELECT * FROM users');
      $userObjects = $query->fetchAll(PDO::FETCH_ASSOC);

      $allUsers = [];

      foreach ($userObjects as $userDb) {
         $user = new User;

         $user->setId($userDb['id']);
         $user->setCreatedAt($userDb['created_at']);
         $user->setUpdateAt($userDb['updated_at']);
         $user->setFirstName($userDb['first_name']);
         $user->setLastName($userDb['last_name']);
         $user->setEmail($userDb['email']);
         $user->setPassword($userDb['password']);

         $allUsers[] = $user;
      }

      require __DIR__ . '/../views/index.php';
   }
}
