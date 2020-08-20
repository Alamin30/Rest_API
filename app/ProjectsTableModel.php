<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectsTableModel extends Model
{
    protected $table='projects_table';
    protected $primaryKey='id';
    public $incrementing= true;
    protected $keyType='int';
    public $timestamps=false;
}
