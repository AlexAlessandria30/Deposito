<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ArticleImage;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use Searchable;
    use HasFactory;
    

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount(){
        return Article::where('is_accepted', null)-> count();
    }



    public function toSearchableArray()
    {
        $categoria = $this->category()->get();
        
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'categoria'=>$categoria,
            
        ];

        

        return $array;
    }

    public function images(){
        return $this->hasMany(ArticleImage::class);
    }
}

