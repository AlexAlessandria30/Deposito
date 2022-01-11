<x-layout>

    <x-slot name='title'>
        Create Article
    </x-slot>
    <x-header />
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="font-primary h1-relative">{{ __('ui.add') }}</h1>
            </div>
        </div>



        <div class="row justify-content-center mt-1">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div class="col-12 col-md-6 inner shadow-lg p-4 mb-5 bg-body rounded">
                <form method="POST" id="articleForm" action="{{ route('article.store') }}"
                    enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" name="uniqueSecret" value="{{ $uniqueSecret }}">

                    <input placeholder="{{__('ui.title')}}" name="title" type="text" class="form-control form-create" value="{{ old('title') }}">

                    <textarea class="form-create" name="description" id="description" cols="80" rows="10"
                        placeholder="{{__('ui.description')}}">{{ old('description') }}</textarea>

                    <input placeholder="{{__('ui.price')}}" name="price" type="text" class="form-control form-create" value="{{ old('price') }}">

                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="dropzone form-create" id="drophere"><div class="dz-message" data-dz-message><span>{{__('ui.dropzone')}}</span></div></div>

                            @error('images')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>

                            @enderror
                        </div>

                    </div>

                    <div class="mb-3">
                        <select class="form-create" name="category" id="category">

                            @foreach ($categories as $category)

                                <option value="{{ $category->id }}"
                                    {{ old('category') == $category->id ? 'selected' : ' ' }}>
                                    {{ $category->name }}</option>
                            @endforeach


                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary cardH mb-3">{{__('ui.button3')}}</button>
                </form>
            </div>
        </div>

    </div>
</x-layout>
