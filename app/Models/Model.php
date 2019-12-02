<?php
namespace App\Models;
use Carbon\Carbon;

class Model
{
   public function getCreatedAtCarbon()
   {
      return (new Carbon($this->getCreatedAt()))->format('d/m/Y');
   }

   public function getUpdateAtCarbon()
   {
      return (new Carbon($this->getUpdateAt()))->diffForHumans();
   }
}