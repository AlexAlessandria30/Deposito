<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class ArticleImage extends Model
{
    use HasFactory;


    protected $casts = [
        'labels'=> 'array',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    static public function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if (!$w && !$h) {
            return Storage::url($filePath);
        }
        $path = dirname($filePath);
        $fileName = basename($filePath);

        $file = "{$path}/crop{$w}x{$h}_{$fileName}";


        
        return Storage::url($file);
    }

    public function getUrl($w = null, $h = null)
    {
        return ArticleImage::getUrlByFilePath($this->file, $w, $h);
    }


}