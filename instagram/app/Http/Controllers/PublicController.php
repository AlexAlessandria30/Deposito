<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicController extends Controller
{
    public function index()
    {
        $photos = Photo::orderByDesc('id')->take(5)->get(); //ordine decrescentr e mostri le ultime 5

        return view('welcome', compact('photos') );
    }

    public function photosByTag($tag, $tag_id)
    {
        // dd($tag, $tag_id);
        $tag = Tag::find($tag_id); //ricerca tramite tag
        // $photos = $tag->photos()->get();
        $photos = $tag->photos;

        return view('bytag', compact('tag','photos') );
    }

    public function createPhoto(Request $request)
    {
        //dd($request->input());
        // dd($request->file('photo'));

        // https://laravel.com/docs/8.x/filesystem#file-uploads

        $path = $request->file('photo')->store('public/photos');
        
    
        $photo = new Photo();

        $photo->title = $request->input('title');
        $photo->description = $request->input('description');

        // https://laravel.com/docs/8.x/filesystem#file-urls
        // ricorda lo stoarge link
        // https://laravel.com/docs/8.x/filesystem#the-public-disk
        $photo->url = Storage::url($path); // 'https://picsum.photos/200/300';

        $photo->save();

        // tags
        $tags = $request->input('tags');

        $tags = explode(' ', $tags);

        foreach($tags as $tag){
            $tagCollection = Tag::where('tag', $tag)->get();

            if ($tagCollection->count() == 0){
                $newTag = new Tag();
                $newTag->tag = $tag;
                $newTag->save();
            } else {
                $newTag = $tagCollection->first();
            }

            $photo->tags()->attach($newTag->id);
        }

        return redirect(route('home'));
    }
}
