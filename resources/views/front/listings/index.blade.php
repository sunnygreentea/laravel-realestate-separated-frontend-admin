@extends('layouts.front')

@section('content')

<main id="main">
    <!-- ======= Intro ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Our Amazing Properties</h1>
                        
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Properties
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro -->
    
    <!-- ======= Property ======= -->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">
                @include('front.listings._partials.listing', ['listings'=>$listings, 'page'=>'other'])
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        {!! $listings->links() !!}
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Property -->
</main>
<!-- End #main -->
@endsection