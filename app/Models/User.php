<?php

namespace App\Models;
use App\Models\Model;

class User extends Model
{

   protected $id;
   protected $first_name;
   protected $last_name;
   protected $created_at;
   protected $update_at;
   protected $email;
   protected $password;

   /**
    * @return mixed
    */
   public function getPassword()
   {
      return $this->password;
   }

   /**
    * @param mixed $password
    */
   public function setPassword($password)
   {
      $this->password = $password;
   }

   /**
    * @return mixed
    */
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * @param mixed $email
    */
   public function setEmail($email)
   {
      $this->email = $email;
   }

   /**
    * @return mixed
    */
   public function getId()
   {
      return $this->id;
   }

   /**
    * @param mixed $id
    */
   public function setId($id)
   {
      $this->id = $id;
   }

   /**
    * @return mixed
    */
   public function getFirstName()
   {
      return $this->first_name;
   }

   /**
    * @param mixed $first_name
    */
   public function setFirstName($first_name)
   {
      $this->first_name = $first_name;
   }

   /**
    * @return mixed
    */
   public function getLastName()
   {
      return $this->last_name;
   }

   /**
    * @param mixed $last_name
    */
   public function setLastName($last_name)
   {
      $this->last_name = $last_name;
   }

   /**
    * @return mixed
    */
   public function getCreatedAt()
   {
      return $this->created_at;
   }

   /**
    * @param mixed $created_at
    */
   public function setCreatedAt($created_at)
   {
      $this->created_at = $created_at;
   }

   /**
    * @return mixed
    */
   public function getUpdateAt()
   {
      return $this->update_at;
   }

   /**
    * @param mixed $update_at
    */
   public function setUpdateAt($update_at)
   {
      $this->update_at = $update_at;
   }

   public function getFullName()
   {
      return $this->getFirstName() . '' . $this->getLastName();
   }

}