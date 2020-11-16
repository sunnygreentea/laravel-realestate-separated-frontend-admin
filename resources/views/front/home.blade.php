@extends('layouts.front')

@section('content')
    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            @foreach($featuredListings as $fea)
            <div class="carousel-item-a intro-item bg-image" style="background-image: url( {{asset ('img/slide-'.$fea->id.'.jpg') }})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">{{$fea->city->name}}
                                           </p>
                                        <h1 class="intro-title mb-4">
                                            {{$fea->name}}</h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="{{route('front.listings.show', $fea->id)}}"><span class="price-a">$ @money($fea->price)</span><span class="price-a">{{$fea->ptype->name}}</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Intro Section -->
    

    <main id="main">
        
        <!-- ======= Latest Properties Section ======= -->
        <section class="section-property section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Latest Properties</h2>
                            </div>
                            <div class="title-link">
                                <a href="{{ route('front.listings.index') }}">All Properties
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="property-carousel" class="owl-carousel owl-theme">
                    @include('front.listings._partials.listing', ['listings'=>$latestListings, 'page'=>'home'])
                </div>
            </div>
        </section>
        <!-- End Latest Properties Section -->

        <!-- ======= Agents Section ======= -->
        <section class="section-agents section-t8">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                                <h2 class="title-a">Best Agents</h2>
                            </div>
                            <div class="title-link">
                                <a href="agents-grid.html">All Agents
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @include('front.agents._partials.agent', ['agents'=>$agents])
                </div>
            </div>
        </section>
        <!-- End Agents Section -->

    </main>

@endsection