<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel as Carousel;

class CarouselController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return response()->json(Carousel::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Carousel $carousel) {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        $carousel = Carousel::create($request->all());
        return response()->json($carousel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Carousel $carousel) {
        return response()->json($carousel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carousel $carousel) {
        $carousel->update($request->all());
        return response()->json($carousel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carousel $carousel) {
        Carousel::destroy($carousel->id);
    }
}
