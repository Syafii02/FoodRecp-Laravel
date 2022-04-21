<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{

    use SoftDeletes;
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'title', 'deskripsi', 'category_id', 'type_id', 'duration', 'link_video', 'images', 'alat', 'bahan', 'langkah_langkah', 'images_path'
    ];

    protected $hidden = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}