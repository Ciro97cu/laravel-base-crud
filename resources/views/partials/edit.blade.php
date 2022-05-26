@extends('../welcome')

@section('main')
<main>
    <div class="container_form py-4">
        <div class="container-sm">
            <form action="{{ route("partials.update", $comic->id) }}" method="POST" id="comicsform" class="d-flex flex-column">
                
                @csrf

                    @method("PUT")

                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="Add Title" value="{{ $comic->title }}">
            
                    <label for="description">Description</label>
                    <textarea name="description" form="comicsform" placeholder="Add Description"></textarea>
            
                    <label for="thumb">Thumb</label>
                    <input type="text" name="thumb" placeholder="Add Thumb" value="{{ $comic->thumb }}">
     
                    <label for="price">Price</label>
                    <input type="text" name="price" placeholder="Add Price" value="{{ $comic->price }}">       
                
                    <label for="series">Series</label>
                    <input type="text" name="series" placeholder="Add Series" value="{{ $comic->series }}">
                               
                    <label for="sale_date">Sale date</label>
                    <input type="text" name="sale_date" placeholder="Add Sale date" value="{{ $comic->sale_date }}">
                
                    <label for="type">Type</label>
                    <input type="text" name="type" placeholder="Add Type" value="{{ $comic->type }}">
                
                    <input type="submit">
            
            </form>
        </div>
    </div>
</main>
@endsection