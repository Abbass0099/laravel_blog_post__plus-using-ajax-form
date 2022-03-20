<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostApi;

class PostsApiController extends Controller
{
    // This Controller is for using Apis : in Routes/api.php

    
    // for Routes/api.php
    // // on browser: http://127.0.0.1:8000/api/posts

    public function get_api_posts(){
        return response()->json(PostApi::get(), 200); 
    }


    public function get_api_posts_by_id($id){

        $postApi = PostApi::find($id);
        if(is_null($postApi)){
            return response()->json(["message" => "Record Not Found"], 404);     
        }
        return response()->json(PostApi::find($id), 200); 
    }

    public function create_post(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $postApi = PostApi::create($request->all());
        return response()->json($postApi, 201);
    }

    public function update_post(Request $request, $id){
        
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $args = $request->all();
        $postApi = PostApi::find($id);

        if(is_null($postApi)){
            return response()->json(["message" => "Record Not Found"], 404);
        }

        $postApi->title = $args['title'];
        $postApi->body = $args['body'];

        $postApi->save();

        // $postApi->update($request->all());        
        return response()->json("Post Updated Successfully", $request);
    }


    // public function delete_post($id) {
    //     $postApi = PostApi::findOrFail($id);

    //     if($postApi){
    //     $postApi->delete();
    //         return response()->json($postApi, 200);
    //         // return "Post Removed Successfully"; 
    //     }
    //     else
    //         return response()->json(error);
    //     return response()->json(null); 
    // }


    public function delete_post(Request $request, $id){
        $postApi = PostApi::find($id);
        if(is_null($postApi)){
            return response()->json(["message" => "Record Not Found"], 404);
        }
        $postApi->delete();
        return response()->json("Post Removed Successfully", 200);
    }



}
