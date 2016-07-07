<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectAssignment extends Model
{
    protected $primaryKey = 'pid';
	protected $table = "project_assignments";
    protected $fillable = ['pid','person_id', 'project_id'];
}
