<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index',  compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $filename = NULL;
        $path = NULL;

        if($request->has('featured_image')) {
            $file = $request->file('featured_image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . rand(0, 9999) . '.' . $extension;
            $path = $file->storeAs('post', $filename, 'public');
        }

        $request->validate([
             'featured_image'  => 'image|file|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        $posts = new Post;
        $posts->featured_image = $filename;

            $posts = Post::create([
            'featured_image'    => $filename,
             'post_title' => $request->post_title,
             'blog_post'  => $request->blog_post,
              'title' => $request->title,
              'description' => $request->description,
              'tags' => $request->tags,
              'category' => $request->category,
              'slug' => $request->slug,
              'author' => $request->author,
        ]);

        return redirect('/admin/posts/')->with('message', 'Post added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
            return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, Post $post)
{
    $request->validate([
        'post_title' => 'required',
        'blog_post' => 'required',
        'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
    ]);

    $filename = $post->featured_image;

    if ($request->hasFile('featured_image')) {
        if ($filename && \Storage::disk('public')->exists('post/' . $filename)) {
            \Storage::disk('public')->delete('post/' . $filename);
        }

        $file = $request->file('featured_image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . rand(0, 9999) . '.' . $extension;

        $file->storeAs('post', $filename, 'public');
    }

    $post->update([
        'featured_image' => $filename,
        'post_title' => $request->post_title,
        'blog_post' => $request->blog_post,
        'title' => $request->title,
        'description' => $request->description,
        'tags' => $request->tags,
        'category' => $request->category,
        'slug' => $request->slug,
        'author' => $request->author,
    ]);

    return redirect('/admin/posts/')->with('message', 'Post updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
         $post->delete();

        return redirect('/admin/posts/');
    }
}
