<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $postsCount = Post::count();

        return view('admin.dashboard', compact('postsCount'));
    }
}
