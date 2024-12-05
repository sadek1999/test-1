<?php

namespace App\Enum;

enum RolesEnum:string
{
   case User='user';
   case Admin='admin';
   case Commenter='commenter';

   public static function labels()
   {
return[
    self::User => 'User',
    self::Admin => 'Admin',
    self::Commenter => 'Commenter',

];
   }
   public function label()
   {

   return match($this){
    self::Admin=>'Admin',
    self::Commenter => 'Commenter',
    self::User => 'User',
   };
   }
}
