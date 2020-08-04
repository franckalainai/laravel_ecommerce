<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Color;
use App\Model\Status;

class ManageController extends Controller
{
    public function indexColor(){
        $colors = Color::all();
        return view('manages.color.index')->with(compact('colors'));
    }

    public function createColor(){
        return view('manages.color.create');
    }

    public function storeColor(Request $request){
        if(Color::create($request->all())){
            return redirect()->route('color.index');
        }
    }

    public function editColor($id){

    }

    public function updateColor(){

    }

    public function destroyColor($id){
        if(Color::destroy($id)){
            return back();
        }
    }

    //--------------Status------------

    public function indexStatus(){
        $status = Status::all();
        return view('manages.status.index')->with(compact('status'));
    }


    public function createStatus(){
        return view('manages.status.create');
    }

    public function storeStatus(Request $request){
        if(Status::create($request->all())){
            return redirect()->route('status.index');
        }
    }

    public function editStatus($id){

    }

    public function updateStatus(){

    }

    public function destroyStatus($id){
        if(Status::destroy($id)){
            return back();
        }
    }
}
