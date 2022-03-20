<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AjaxForm;

class AjaxFormController extends Controller
{
    public function index(){
        return view('ajaxform.inputsform');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        // $ajaxform = AjaxForm::create($request->all());
        // return response()->json($ajaxform, 201);

        $ajaxform = new AjaxForm;
        $ajaxform->name = $request->input('name');
        $ajaxform->email = $request->input('email');
        $ajaxform->phone_number = $request->input('phone_number');
        
        $ajaxform->save();

        return ['test' => 123];


        //  request()->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone_number' => 'required'
        // ]);
         
        // $args = $request->all();
        // $check = AjaxForm::insert($args);
        // $arr = array('msg' => 'Something goes to wrong. Please try again lator', 'status' => false);

        // if($check){ 
        //     $arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
        // }
        // return response()->json($arr);

    }

}
