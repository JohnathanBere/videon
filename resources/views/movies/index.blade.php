@extends('layouts.main')
@section('title', 'Videon')

@section('content')
    <section class="content-block gallery-1 gallery-1-1">
        <div class="container">
            <div class="underlined-title">
                <h1>Never Bored.</h1>
                <hr>
                <h2>FILMS JUST FOR YOU</h2>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label class="control-label" for="formInput18">Finding a film is only the beginning</label>
                        <input type="text" class="form-control" id="searchForm" placeholder="Search...">
                        <!-- Look to make this button function -->
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="filter">
                <li class="active">
                    <a href="#" data-filter="*">All</a>
                </li>
                <li>
                    <a href="#" data-filter=".latest">Latest</a>
                </li>
                <li>
                    <a href="#" data-filter=".moderns">Modern Films</a>
                </li>
                <li>
                    <a href="#" data-filter=".old">Older Movies</a>
                </li>
                <li>
                    <a href="#" data-filter=".kids">Children</a>
                </li>
            </ul>
            <!-- /.gallery-filter -->
            <div class="row">
                <div class="isotope-gallery-container">
                    @foreach($movies as $movie)
                    <div class="col-md-3 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ $movie->main_image }}" class="img-responsive" alt="{{ $movie->name }}">
                                <div class="image-overlay"></div>
                                <a href="{{ $movie->main_image }}" class="gallery-zoom"><i class="fa fa-eye" alt="{{ $movie->name }}"></i></a>
                                <a href="movies/{{ $movie->id }}/" class="gallery-link" target="_blank"><i class="fa fa-film"></i></a>
                            </div>
                            <div class="gallery-details">
                                <h5>{{ $movie->name }}</h5>
                                <h5>£{{ $movie->price }}</h5>
                                <h5>{{ $movie->director }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- /.gallery-item-wrapper -->
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
@stop

@section('footer')
@stop