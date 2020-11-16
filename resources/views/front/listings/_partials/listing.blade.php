
    @foreach ($listings as $listing)
    <div class="@if($page=='home')carousel-item-b @else col-md-4 @endif">
        <div class="card-box-a card-shadow">
            <div class="img-box-a">
                <img src="{{ asset('img/listing-'.$listing->id.'.jpg') }}" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
                <div class="card-overlay-a-content">
                    <div class="card-header-a">
                        <h2 class="card-title-a">
                            <a href="{{route('front.listings.show', $listing->id)}}">{{$listing->name}}</a>
                        </h2>
                     </div>
                    <div class="card-body-a">
                        <div class="price-box d-flex">
                            <span class="price-a">$ @money($listing->price)</span>
                            <span class="price-a">{{$listing->ptype->name}}</span>
                        </div>
                        <a href="{{route('front.listings.show', $listing->id)}}" class="link-a">Click here to view
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info d-flex justify-content-around">
                            <li>
                                <h4 class="card-info-title">Area</h4>
                                <span>{{$listing->area}}
                                    <sup>2</sup>
                                </span>
                            </li>
                            <li>
                                <h4 class="card-info-title">Beds</h4>
                                <span>{{$listing->beds}}</span>
                            </li>
                            <li>
                                <h4 class="card-info-title">Baths</h4>
                                <span>{{$listing->baths}}</span>
                            </li>
                            <li>
                                <h4 class="card-info-title">Garages</h4>
                                <span>{{$listing->garage}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
