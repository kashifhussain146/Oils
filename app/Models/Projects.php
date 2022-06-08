<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table='projects';
    protected $fillable = ['id', 'slug', 'sku', 'name', 'short_desc', 'big_desc', 'mobile_desc', 'image', 'video_url', 'meta_title', 'meta_desc', 'meta_image', 'tags', 'is_published', 'purity', 'weight', 'quantity', 'tax', 'product_price', 'purchase_price', 'is_discount', 'is_featured', 'is_special', 'discount_type', 'discount_price', 'discount_percentage', 'created_at', 'updated_at'];
}
