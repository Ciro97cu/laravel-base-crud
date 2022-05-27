@extends('../welcome')

@section('main')
<main>
    <div class="container_form py-4">
        <div class="container-sm">
            <form action="{{ route("partials.store") }}" method="POST" id="comicsform" class="d-flex flex-column">
                
                @csrf

                <label for="title">Title</label>
                <input type="text" name="title" placeholder="Add Title">
        
                <label for="description">Description</label>
                <textarea name="description" form="comicsform" placeholder="Add Description"></textarea>
        
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" placeholder="Add Thumb">
    
                <label for="price">Price</label>
                <input type="text" name="price" placeholder="Add Price">       
            
                <label for="series">Series</label>
                <input type="text" name="series" placeholder="Add Series">
                            
                <label for="sale_date">Sale date</label>
                <input type="date" name="sale_date" placeholder="Add Sale date">
            
                <label for="type">Type</label>
                <input type="text" name="type" placeholder="Add Type">
            
                <input type="submit">
            
            </form>
        </div>
    </div>
</main>
@endsection