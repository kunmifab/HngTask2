<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json([
             "slackUsername"=> "KunmiFab",
              "operation_type"=> "",
               "result"=> "result"
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enum(Request $request)
    {
        $validate = $request->validate([
            "x" => 'required|integer',
            "y" => 'required|integer',
            "operation_type" => "required|string"
        ]);


        if($validate){


        $operation_type = ["addition","subtraction","multiplication"];


        if($request->operation_type === $operation_type[0]){
            $result = $request->x + $request->y;
        }elseif($request->operation_type === $operation_type[1]){
            $result = $request->x - $request->y;
        }elseif($request->operation_type === $operation_type[2]){
            $result = $request->x * $request->y;
        }
                return response()->json([
                    "slackUsername"=> "KunmiFab",
                     "operation_type"=> $request->operation_type,
                      "result"=> $result
               ]);




            }



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
    }
}
