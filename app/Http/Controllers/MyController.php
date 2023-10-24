<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MyController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        if ($request->hasFile('image')) {
            $post->addMedia($request->file('image'))->toMediaCollection('featured_image');
        }

        return redirect()->route('home');
    }

    public function media()
    {
        $files = Storage::disk('media')->allFiles('/');

        // dd($files);


        // return view('media');   
        return view('media', ['files' => $files]);
    }

    public function upload(Request $request)
    {
        dd($request->image);
        
        if($request->hasFile('img')){
            $path=$request->file('img')->store('Images', 'media'); 
            // $name= pathinfo($request->file('img')->getClientOriginalName(), PATHINFO_FILENAME); 
            // $imageName = $name."_".date('d_m_Y_h_m_s').'.'.$request->image->extension();  
            // $request->imageName->move(public_path('images'), $imageName);
        }
        echo "has file";
        return back();
    }
}
