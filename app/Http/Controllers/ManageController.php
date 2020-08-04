<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Color;
use App\Model\Status;

class ManageController extends Controller
{
    public function indexColor(){
        return view('manages.color.index');
    }

    public function storeColor(){

    }

    public function editColor($id){

    }

    public function updateColor(){

    }

    public function destroyColor($id){

    }

    //--------------Status------------

    public function indexStatus(){
        return view('manages.status.index');
    }

    public function storeStatus(){

    }

    public function editStatus($id){

    }

    public function updateStatus(){

    }

    public function destroyStatus($id){

    }
}
