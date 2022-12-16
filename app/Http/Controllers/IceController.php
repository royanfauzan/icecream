<?php

namespace App\Http\Controllers;

use App\Models\Icecream;
use App\Models\Topping;
use Illuminate\Http\Request;

class IceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tables',[
            'icecreams'=>Icecream::with('toppings')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $total_price = 0;
        if ($request->size=='S') {
            $total_price+=40000;
        }
        if ($request->size=='M') {
            $total_price+=50000;
        }
        if ($request->size=='XL') {
            $total_price+=60000;
        }


        $ice_cream = Icecream::create([
            'icecream'=>$request->icecream,
            'size'=>$request->size,
            'total_price'=>$total_price,
        ]);

        foreach ($request->toppings as $key => $topping) {
            $total_price+=5000;
            Topping::create(
                [
                    'topping_name'=>$topping,
                    'icecream_id'=>$ice_cream->id
                ]
                );
        }

        $ice_cream->total_price = $total_price;
        $ice_cream->save();

        return redirect('/tables');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $ice_cream = Icecream::find($id);
        $ice_cream->delete();
        return redirect('/tables');
    }
}
