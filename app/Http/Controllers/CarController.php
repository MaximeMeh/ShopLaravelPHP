<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', array('cars' => $cars));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Please enter your article below: <p>";
        return view('cars.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo 'Article received';

        $name = request('name');
        $price = request('price');
        $description = request('description');

        Car::create(['make' => $request->name, 'model' => $request->price, 'produced_on' => $request->description]);

        return redirect()->route('articles.index');
        /*
        $cars = new Car();

        $cars->make = $name;
        $cars->model = $price;
        $cars->produced_on = $description;
        $cars->save();
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', array('car' => $car));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);

        echo "If you want to change something: <p>";
        return view('cars.edit', compact('car'));
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
        echo 'Article updated';

        $name = request('name');
        $price = request('price');
        $description = request('description');

        $car = Car::find($id);

        $car->update(['make' => $request->name, 'model' => $request->price, 'produced_on' => $request->description]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        $car->destroy($id);

        return redirect()->route('articles.index');
    }
}
