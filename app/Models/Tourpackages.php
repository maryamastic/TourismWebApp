<?php

namespace App\Models;
use Conner\Tagging\Taggable;


use Illuminate\Database\Eloquent\Model;

class Tourpackages extends Model
{
protected $table = 'tourpackages';
protected $fillable = [
    'PackageId',
    'PackageType',
    'PackageName',
    'PackagePrice',
    'PackageLocation',
    'PackageDetails',
    'Duration',
    'Deadline',
    'slug',

    // Add other column names as needed
];
use Taggable;

    // Enable tagging for this model
    protected $taggingEnabled = true;
}



