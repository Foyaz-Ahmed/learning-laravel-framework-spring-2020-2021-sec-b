<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   /* protected $table = null;
      public $timestamps = false;
    protected $primarykey = NULL/IF ANY PRIMAY KEY AVAILABLE IN DATABASE EXAMPLE: UserId;
    */
    // WHEN public $timestamps = TRUE THEN,
    // const CREATED_AT = NULL/"SPECIFIC COLUMN VALUE";
   //  CONST UPDATED_AT = NULL/"SPECIFIC COLUMN VALUE";
   protected $table = "employees";
   public $timestamps = false;
   protected $primarykey = "null";
}
