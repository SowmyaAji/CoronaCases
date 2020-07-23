<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Corona;

class APIController extends Controller
 {
    public function index()
     {
         return Corona::all();
     }

    public function show(Corona $corona)
    {
        return $corona;     }
    

    public function store(Request $request)
     {         $corona = Corona::create($request->all());

         return response()->json($corona, 201);
     }
    
    public function update(Request $request, Corona $corona)
     {
         $corona->update($request->all());

        return response()->json($corona, 200);
     }
    
    public function delete(Corona $corona)
     {
         $corona->delete();

        return response()->json(null, 204);
    }
 }