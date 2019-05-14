<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applied_projects extends Model
{
    protected $fillable = [
        'creator_name', 'project_title', 'applicant_id','cost_per_hour'
    ];
}
