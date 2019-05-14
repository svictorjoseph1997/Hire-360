<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_projects extends Model
{

    protected $fillable = [
        'creator_name', 'project_title', 'project_body', 'skills_required', 'cost_per_hour'
    ];
}
