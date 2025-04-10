<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Employer;
use App\models\tag;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_listings';
    protected $guarded = [];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(tag::class, foreignPivotKey: 'job_listing_id');
    }
}





