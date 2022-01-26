<x-layouts.app>
    <h1>Tag: #{{ $tag->tag }}</h1>

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
    </div>

    <a href="/">< torna a home</a>
</x-layouts.app>