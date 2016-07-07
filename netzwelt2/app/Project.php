<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    protected $fillable = array('p_code','p_name','p_remarks','p_budget');
}
