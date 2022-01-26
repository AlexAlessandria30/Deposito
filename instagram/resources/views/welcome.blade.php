<x-layouts.app>
    <h1>Ciao sono Intsgrammm</h1>

    <h2>Ultime 5 Foto inderite</h2>

    <div class="container">
        <div class="row">
            
                @foreach( $photos as $photo )
                    <div class="col-4">
                        <picture>
                            <h3>{{ $photo->title }}</h3>
                            <img class="img-fluid" src="{{ $photo->url }}" alt="{{ $photo->description }}">
                            <p>
                                @foreach( $photo->tags()->get() as $tag )
                                    <a href="{{ route('photosByTag', [ 'tag' => $tag->tag , 'tag_id' => $tag->id ]) }}">#{{ $tag->tag }}</a>
                                @endforeach
                            </p>
                        </picture>
                    </div>
                @endforeach
            
        </div>

        <div class="row">
            <div class="col">
                <h2>Inserisci la tua foto</h2>

                <form action="{{ route('createPhoto') }}" method="POST" enctype='multipart/form-data'>
                    <!-- https://laravel.com/docs/8.x/csrf#preventing-csrf-requests -->
                    @csrf

                    <input type="text" name="title" placeholder="titolo qui"><br>

                    <p>description</p>
                    <textarea name="description" cols="30" rows="10"></textarea><br>
                    <input type="text" name="tags" placeholder="etichette qui separate da spazio"><br>

                    <!-- https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/file -->
                    <input type="file"
                        name="photo"
                        accept="image/png, image/jpeg">

                    <button type="submit">carica</button>
                    <br>
                    <br><br>    
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>