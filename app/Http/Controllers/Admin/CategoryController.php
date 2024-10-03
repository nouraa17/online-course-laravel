<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::get();
        return view('partial-components.admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partial-components.admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages=['name.required'=>'required',
        'description.required'=>'required',

    ];
        $data=$request->validate([
            'name'=>'required|max:30',
            'description'=>'required|max:100'],$messages);
            Category::create($data);
            return redirect('dashboard/categories/index');
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
    public function edit(string $id)
    {
        $category=Category::findOrFail($id);
        return view('partial-components.admin.categories.edit',compact('category'));}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'name'=>'required',
           ],);
           Category::where('id',$id)->update($data);
           return redirect('dashboard/categories/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courses = course::where('category_id', $id)->get()->toArray();

        if(count($courses)<=0){


            Category::where('id',$id)->delete();
            return redirect('dashboard/categories/index')->with('success','category is deleted successfully');
    } else{
        return redirect()->back()->with('cancel','delete is not available');




    }
}}
