@extends('../welcome')

@section('main')
<main>
    <div class="container_cards py-4">
        <div class="container-sm">
            <div class="tag_series">CURRENT SERIES</div>
            <div class="row">
                @foreach ($arrayComics as $comic)
                <div class="col-sm-2">
                    <a href="{{ route('partials.edit', $comic->id) }}" class="edit_card mt-5 mb-2 p-1 text-white text-center d-block">EDIT</a>
                    <div class="wrapper_img">
                        <a href="{{ route('partials.show', $comic->id) }}">
                            <img class="pb-3" src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                        </a>
                    </div>
                    <p>{{ $comic["title"] }}</p>
                </div>
                @endforeach
            </div>
            <div class="row mt-5 justify-content-center">
                <a href="{{ route("partials.create") }}" class="col-auto tag_load">ADD COMIC</a>
            </div>
        </div>
    </div>
</main>
@endsection