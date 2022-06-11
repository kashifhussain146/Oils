<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
    
    public function scopeActive($query){
        return $query->where('active', 1);
    }

    public function content(){
        return $this->hasMany(PageContent::class,'page_id','id')->Active();
    }
}
