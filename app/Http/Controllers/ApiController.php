<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\http\Requests;
use App\http\Resources\PostResource;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get All records
        $posts =  Post::paginate(2);
        
        // Return the collection of posts as a resource
        return PostResource::collection($posts);
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
    public function store(Request $request)
    {
        // Check the request method
        if($request->isMethod('put')){
            
            $post = Post::findorfail($request->input('post_id'));
            $post->id = $request->input('post_id');
            $post->title = $request->input('title');
            $post->body = $request->input('body');

            
        }else{
            $post = new Post;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->cover_image = $request->input('cover_image');
            $post->user_id = $request->input('user_id');
        }


        if($post->save()){

            return new PostResource($post);
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
        // Get a Post By Id
        $post = Post::findorfail($id);
        return new PostResource($post);
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
        // Delete the resource

       $post = Post::findorfail($id);
       
       if($post->delete()){
            
            return new PostResource($post);

       }

    }

    /**
     * Send email
     *
     * @return void
     * @author 
     **/
    public function sendEmail(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

           $message->from('me@gmail.com', 'Christian Nwamba');

           $message->to('rehman259@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);
    }

}
