<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $blogs = Blog::limit(3)->latest()->paginate();

            return view('frontend.blogs.index', compact('blogs'));
        } catch (\Exception $exception) {
        }
    }
}
