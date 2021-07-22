<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\EditPostRequest;
use App\Http\Requests\Admin\CreatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->paginate(20);

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }

    
    public function store(CreatePostRequest $request)
    {
        $tags = explode(',', $request->tags);

        if ($request->has('image')) {
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('uploads', $filename, 'public');
        }
        
        $post = auth()->user()->posts()->create([
            'title' => $request->title,
            'image' => $filename ?? null,
            'post' => $request->post,
            'category_id' => $request->category
        ]);

        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $post->tags()->attach($tag);
        }

        return redirect()->route('admin.posts.index');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = $post->tags->implode('name', ', ');

        return view('admin.posts.edit', compact('post', 'tags', 'categories'));
    }

    public function update(EditPostRequest $request, Post $post)
    {
        $tags = explode(',', $request->tags);

        if ($request->has('image')) {
            Storage::delete('public/uploads/' . $post->image);
            
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('uploads', $filename, 'public');
        }

        $post->update([
            'title' => $request->title,
            'image' => $filename ?? $post->image,
            'post' => $request->post,
            'category_id' => $request->category
        ]);

        $newTags = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            array_push($newTags, $tag->id);
        }
        $post->tags()->sync($newTags);

        return redirect()->route('admin.posts.index');
    }

    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete('public/uploads/' . $post->image);
        }

        $post->tag()->detach();
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
