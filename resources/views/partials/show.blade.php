@extends('../welcome')

@section('main')
<main>
    <div class="blue_div">
        <div class="container-sm">
            <div class="card_absolute">
                <img src="{{$comic['thumb']}}" class="w-100" alt="">
            </div>
        </div>
    </div>
    <div class="container_single_card">
        <div class="container-sm">
            <div class="row py-5">
                <div class="col-sm-9">
                    <h2 class="pb-3">{{$comic['title']}}</h2>
                    <div class="row price_info mb-3">
                        <div class="col-sm-8 py-3">
                            <div class="row justify-content-between">
                                <div class="col-auto"><span class="light_green">U.S. Price: </span><span
                                        class="text-white">{{$comic['price']}}</span></div>
                                <div class="col-auto light_green">AVAILABLE</div>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center py-3">
                            <p>Check Availability</p>
                        </div>
                    </div>
                    <p class="description_card">{{$comic['description']}}</p>
                </div>
                <div class="col-sm-3 text-end">
                    ADVERTISEMENT
                    <img src="/images/adv.jpg" alt="adv">
                </div>
            </div>
        </div>
    </div>

    <div class="info_card_container py-5">
        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="pb-4">Talent</h2>
                    <div class="row border_bottom">
                        <div class="col-sm-4">Art by:</div>
                        <div class="col-sm-8">
                            INFORMATION NOT AVAILABLE
                        </div>
                    </div>
                    <div class="row border_bottom">
                        <div class="col-sm-4">Written by:</div>
                        <div class="col-sm-8">
                            INFORMATION NOT AVAILABLE
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h2 class="pb-4">Specs</h2>
                    <div class="row border_bottom">
                        <div class="col-sm-4">Series:</div>
                        <div class="col-sm-8">
                            <a class="link_blue" href="#">
                                {{$comic['series']}}
                            </a>
                        </div>
                    </div>
                    <div class="row border_bottom">
                        <div class="col-sm-4">U.S. Price:</div>
                        <div class="col-sm-8">{{$comic['price']}}</div>
                    </div>
                    <div class="row border_bottom">
                        <div class="col-sm-4">On Sale Date:</div>
                        <div class="col-sm-8">{{$comic['sale_date']}}</div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 justify-content-center">
                <div class="col-auto tag_back"><a href="{{route("partials.index")}}">BACK</a></div>
            </div>
        </div>
    </div>
</main>
@endsection