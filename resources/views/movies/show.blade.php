@extends('layouts.main')
@section('title', 'Show Movie')

@section('content')
    <section class="content-block content-1-8">
        <div class="container">
            <ul class="nav nav-tabs text-center" role="tablist" id="myTab">
                <li class="active">
                    <a href="#tab1" role="tab" data-toggle="tab">Overview</a>
                </li>
                <li>
                    <a href="#tab2" role="tab" data-toggle="tab">Synopsis</a>
                </li>
                <li>
                    <a href="#tab3" role="tab" data-toggle="tab">Rent</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1 col-sm-6">
                            <img class="img-responsive" src="{{$movie->main_image}}">
                        </div>
                        <!-- /.col -->
                        <div class="col-md-5 col-sm-6">
                            <h3>{{ $movie->name }}</h3>
                            <p>{{ $movie->director }}</p>
                            <p>{{ $movie->genre }}</p>
                            <p>£{{ $movie->price }}</p>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#tab1 -->
                <div class="tab-pane fade" id="tab2">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3>Synopsis</h3>
                            <p>{{ $movie->synopsis }}</p>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <img class="img-responsive" src="http://placehold.it/600x250">
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#tab2 -->

                <div class="tab-pane fade" id="tab3">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1 text-center">
                            <h3>Rent This movie</h3>
                            <p>Interested in renting {{ $movie->name }}?</p>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <img class="img-responsive" src="http://placehold.it/600x250">
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /#tab2 -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.container -->
    </section>
@stop

@section('footer')
@stop