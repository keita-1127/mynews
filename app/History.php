<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
  protected $guarded = array('id');
  
  public static $rules = array(
    'name_id' => 'required',
    'edited_at' => 'required',
    'profile_id' => 'required',
    );
}