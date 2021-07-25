<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EditTagRequest;
use App\Http\Requests\Admin\CreateTagRequest;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate(20);

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(CreateTagRequest $request)
    {
        Tag::create($request->validated());

        return redirect()->route('admin.tags.index');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(EditTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());

        return redirect()->route('admin.tags.index');
    }

    public function destroy(Tag $tag)
    {
        foreach ($tag->posts as $post) {
            $post->tags()->detach();
        }

        if (!$tag->posts()->count()) {
            $tag->delete();
        }

        return redirect()->route('admin.tags.index');
    }
}
