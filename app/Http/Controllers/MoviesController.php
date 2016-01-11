<?php

namespace App\Http\Controllers;

use App\Commands\StoreMovieCommand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests;
use App\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {
        $name = $request->input('name');
        $category_id = $request->input('category_id');
        $director = $request->input('director');
        $genre = $request->input('genre');
        $synopsis = $request->input('synopsis');
        $price = $request->input('price');
        $main_image = $request->file('main_image');
        $image1 = $request->file('_image1');
        $image2 = $request->file('_image2');
        $image3 = $request->file('_image3');


        // Check if image(s) uploaded successfully
        if($main_image) {
            $main_image_filename = $main_image->getClientOriginalName();
            $main_image->move(public_path('images/uploaded'), $main_image_filename);
        }

        else {
            $main_image_filename = 'noimage.jpg';
        }


        if($image1) {
            $image1_filename = $image1->getClientOriginalName();
            $image1->move(public_path('images/uploaded'), $image1_filename);
        }

        else {
            $image1_filename = 'noimage1.jpg';
        }

        if($image2) {
            $image2_filename = $image2->getClientOriginalName();
            $image2->move(public_path('images/uploaded'), $image2_filename);
        }

        else {
            $image2_filename = 'noimage2.jpg';
        }

        if($image3) {
            $image3_filename = $image3->getClientOriginalName();
            $image3->move(public_path('images/uploaded'), $image3_filename);
        }

        else {
            $image3_filename = 'noimage3.jpg';
        }

        // Create command
        $command = new StoreMovieCommand($name, $category_id, $director, $genre, $synopsis, $price, $main_image_filename, $image1_filename, $image2_filename, $image3_filename);
        $this->dispatch($command);

        return \Redirect::route('movies.index')
            ->with('flash_message' , 'Entry Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies/show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('movies/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
