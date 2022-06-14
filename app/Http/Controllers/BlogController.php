<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function show()
    {
        return view('addblog');
    }

    public function create(Request $req)
    {
        $this->validate($req, [
            'name' => 'required',
            'desc' => 'required',
            'date' => 'required'
        ]);

        $blog = new Blog();

        $blog->name = $req->input('name');
        $blog->desc = $req->input('desc');
        $blog->date = $req->input('date');



        if (!empty($blog->name) && !empty($blog->desc) && !empty($blog->date)) {
            $blog->save();
            // Alert::success('Successfully Added', 'New Blog Added');
            return response()->json([
                "message" => "New Blog Added"
            ], 200);
        } else {
            return response()->json(201);
        }
    }

    public function display()
    {
        $blog = Blog::all();
        return view('displayblog', ["blog" => $blog]);
    }

    public function deletedata($id)
    {

        $blog = Blog::find($id);
        $blog->delete();
        Alert::warning('Blog Deleted', 'Deleted');

        return redirect()->route('displayblog');
    }

    public function updatedata(Request $req)
    {
        $id = $req->input('userid');
        $blog = Blog::find($id);
        $inputs = $req->all();
    }

    public function displayedit($id)
    {

        $blog = Blog::find($id);
        return view('editblog', ["blog" => $blog]);
    }

    function postdata(Request $req)
    {
        $id = $req->input('userid');
        $blog = Blog::find($id);
        $inputs = $req->all();
        $blog->name = $inputs['name'];
        $blog->desc = $inputs['desc'];
        $blog->date = $inputs['date'];
        $blog->update();
        return redirect()->route('displayblog');
    }
}
