<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model  // We extend model to create an Eloqent model
{
  use HasFactory;

  protected $table = "job_listings";

  protected $fillable = ['title', 'salary'];
}
