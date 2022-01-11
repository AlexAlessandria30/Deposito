<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ArticleRequest;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeSearchImage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())), 16, 36)
        );
        $categories = Category::all();

        return view('article.create', compact('categories', 'uniqueSecret'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {

        $article = Auth::user()->articles()->create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category,


        ]);

        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedimages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);



        foreach ($images as $image) {
            $i = new ArticleImage();

            $fileName = basename($image);
            $file =  "public/article/{$article->id}/{$fileName}";

            Storage::move($image, $file);



            $i->file = $file;
            $i->article_id = $article->id;

            $i->save();


            GoogleVisionSafeSearchImage::withChain([
                new GoogleVisionLabelImage($i->id),
                new GoogleVisionRemoveFaces($i->id),
                new ResizeImage($i->file, 500, 300),
                new ResizeImage($i->file, 180, 300),
            ])->dispatch($i->id);
        }

        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));


        return redirect(route('homepage'))->with('message', 'Il tuo annuncio verrà revisionato appena possibile');
    }




    public function storeImages(Request $request)
    {

        $uniqueSecret = $request->input('uniqueSecret');

        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");

        dispatch(new ResizeImage(
            $fileName,
            120,
            120
        ));


        session()->push("images.{$uniqueSecret}", $fileName);

        return response()->json([
            'id' => $fileName

        ]);
    }


    public function removeImages(Request $request)
    {

        $uniqueSecret = $request->input('uniqueSecret');

        $fileName = $request->input('id');

        session()->push("removedimages.{$uniqueSecret}", $fileName);

        Storage::delete($fileName);

        return response()->json('ok');
    }

    public function getImages(Request $request)
    {
        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedImages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);
        // dd($images);
        $data = [];

        foreach ($images as $image) {
            $data[] = [
                'id' => $image,
                'src' => ArticleImage::getUrlByFilePath($image, 120, 120)
            ];
        }
        return response()->json($data);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {


        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */



    public function myarticles()
    {

        $articles = Auth::user()->articles()->get();

        return view('article.myarticles', compact('articles'));
    }


    public function destroy(Article $article)
    {
        $article->images()->delete();

        $article->delete();

        return redirect(route('myarticles'))->with('message', 'Il tuo annuncio e\' stato elliminato');;
    }
}
