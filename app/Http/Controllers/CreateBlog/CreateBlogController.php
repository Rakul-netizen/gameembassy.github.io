<?php

namespace App\Http\Controllers\CreateBlog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CreateBlog;

class CreateBlogController extends Controller
{
    public function createblog(Request $request)
    {
        $request->validate([
            'usertitle' => 'required|string',
            'userdescription' => 'required|string',
            'usercontent' => 'required|string',
            'userimage' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('userimage')->store('userimages', 'public');

        CreateBlog::create([
            'usertitle' => $request->usertitle,
            'userdescription' => $request->userdescription,
            'usercontent' => $request->usercontent,
            'userimage' => $imagePath,
        ]);
        return back()->withSuccess('you have been successfully upload!');
    }

    public function blog(){
        view('blog');
    }
}
