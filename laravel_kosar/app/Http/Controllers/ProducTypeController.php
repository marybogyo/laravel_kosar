<?php

namespace App\Http\Controllers;

use App\Models\ProducType;
use Illuminate\Http\Request;

class ProducTypeController extends Controller
{
    public function index(){
        $types = response()->json(ProducType::all());
        return $types;
    }

    public function show($id){
        $type = response()->json(ProducType::find($id));
        return $type;
    }

    public function store(Request $request){
        $type = new ProducType();
        $type->name = $request->name;
        $type->description = $request->description;
        $type->cost = $request->cost;

        $type->save();
    }

    public function update(Request $request, $id){
        $type = ProducType::find($id);
        $type->name = $request->name;
        $type->description = $request->description;
        $type->cost = $request->cost;

        $type->save();
    }

    public function destroy($id){
        ProducType::find($id)->delete();
    }
}
