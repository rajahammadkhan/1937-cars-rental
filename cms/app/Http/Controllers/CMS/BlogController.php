<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cms.blogs.index');
    }

    public function datatable()
    {
        $blog = Blog::get();

        // $roles = $roles->transform(function ($item) {
        //     $item->role_names = $item->roles->pluck('name')->implode(', ');
        //     return $item;
        // })->all();

        return DataTables::collection($blog)->toJson();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'isEdit' => false,
        ];

        return view('cms.blogs.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'name' => 'required',
        ]);
        
        $blog         =   new Blog;

        if($request->has('image')){
            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $blog->image  =   $imageName;
        }

        $blog->name                 =   $request->name;
        $blog->by                   =   $request->by;
        $blog->slug                 =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $blog->date                 =   $request->date;
        $blog->short_description    =   $request->short_description;
        $blog->description          =   $request->description;
        $blog->keywords             =   $request->keywords;
        $blog->meta_title           =   $request->meta_title;
        $blog->meta_description     =   $request->meta_description;
        $blog->save();

        return redirect()->route('blog');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function headerContent(Blog $blog)
    {
        $data = [
            'blogs'    => $blog->load('details'),
        ];

        // return $data['blogs'];

        return view('cms.blogs.add-header-content', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $data = [
            'isEdit'                => true,
            'blog'    => $blog,
        ];

        // return $data['blogs'];

        return view('cms.blogs.add', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // return $request;

        if($request->has('image')){
            Storage::disk('cms')->delete('', $blog->image);
            $imageName = Storage::disk('cms')->putFile('', $request->image);
            $blog->image  =   $imageName;
        }

        $blog->name                 =   $request->name;
        $blog->by                   =   $request->by;
        $blog->slug                 =   strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $blog->date                 =   $request->date;
        $blog->short_description    =   $request->short_description;
        $blog->description          =   $request->description;
        $blog->keywords             =   $request->keywords;
        $blog->meta_title           =   $request->meta_title;
        $blog->meta_description     =   $request->meta_description;
        $blog->save();

        return redirect()->route('blog');
    }

    public function status(Request $request)
    {

        $status = $request->status;
        $id = $request->id;

        $item = Blog::find($id);

        if ($item->update(['status' => $status])) {
            $response['status'] = true;
            $response['message'] = 'Status Updated Successfully!';

            return response()->json($response, 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $blog = Blog::where('id', $request->deleteId)->first();
        Storage::disk('cms')->delete('', $blog->image);
        $blog->delete();

        return response()->json($blog, 200);
    }
}
