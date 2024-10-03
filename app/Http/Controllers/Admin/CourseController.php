<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $courses = Course::with('category')->get();
            return view('partial-components.admin.courses.index', compact('courses'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::select('id','name')->get();

        return view('partial-components.admin.courses.create',compact('categories'));

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'category_id.required' => 'Category is required',
            'price.required' => 'Price is required',
        ];

        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'trailer' => 'nullable|string',
            'price' => 'required|numeric',
        ], $messages);

        Course::create($data);

        return redirect('dashboard/courses/index')->with('success', 'Course created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
