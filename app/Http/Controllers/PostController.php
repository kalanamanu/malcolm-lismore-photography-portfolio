<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request) {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'image_id' => 'required|string',
            'image' => 'required|image', 
            'category' => 'required|string'
        ]);

        if ($validator->fails()) {
            return back()->with('status', 'Something went wrong!');
        }

        // Handle the file upload
        if ($request->hasFile('image')) {
            $requestData = $request->all();
            $fileName = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $requestData["image"] = '/storage/'.$path;

            // Create the Post
            Post::create([
                'image_id' => $request->image_id,
                'image' => '/storage/'.$path, 
                'category' => $request->category,
            ]);

            return back()->with('status', 'Image uploaded successfully!');
        } else {
            return back()->with('status', 'Image file is required!');
        }
    }

    public function edit($postId){
        $post = Post::findOrFail($postId);
        return view('edit', compact('post'));
    }

    public function update($postId, Request $request) {

        $post = Post::findOrFail($postId);
    
            $validator = Validator::make($request->all(), [
                'image_id' => 'required|string',
                'image' => 'sometimes|image', 
                'category' => 'required|string'
            ]);
    
            if ($validator->fails()) {
                return back()->with('status', 'Something went wrong!');
            }
    
            $requestData = $request->all();
    
            if ($request->hasFile('image')) {
                // Delete the old image file from storage
                if ($post->image) {
                    $oldImagePath = str_replace('/storage/', '', $post->image);
                    Storage::disk('public')->delete($oldImagePath);
                }
    
                // Store the new image file
                $fileName = time().'_'.$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('images', $fileName, 'public');
                $requestData['image'] = '/storage/'.$path;
            }
    
            $post->update($requestData);
    
            return redirect(route('posts.all'))->with('status', 'Post updated!');
}
    
    public function delete($postId) {
        Post::findOrFail($postId)->delete();
        return redirect(route('posts.all'));

}
    
}