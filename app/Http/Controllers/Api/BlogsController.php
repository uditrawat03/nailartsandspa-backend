<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $blogs = Blog::paginate();
            return response()->asSuccess($blogs);
        } catch (\Exception $exception) {
            return response()->asError($exception->getMessage(), $exception->getCode());
        }
    }
}
