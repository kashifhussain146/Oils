<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageContent extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    
    public function scopeActive($query){
        return $query->where('active', true);
    }
}
