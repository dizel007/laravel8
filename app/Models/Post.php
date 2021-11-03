<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes; // trait подключаем для SOftDeletes

    protected $table = 'posts'; // 
    protected  $guarded = []; // Разрешение на добавление данные в Таблицу через этот класс
    // protected  $guarded = false; // Разрешение на добавление данные в Таблицу через этот класс
    // protected $fillable = [];
public function category (){
    return $this->belongsToMany(Category::class,'category_id', 'id');
}

public function tags () {
    return $this->belongsToMany(Tag::class, 'post_tags', 'post_id','tag_id');

}

}
