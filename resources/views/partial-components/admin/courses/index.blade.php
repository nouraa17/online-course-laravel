@extends('partial-components.admin.layouts.layout')
@section('title', 'All Courses')
@section('content')

<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of Courses</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-12">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @elseif(session()->has('cancel'))
                            <div class="alert alert-danger">
                                {{ session()->get('cancel') }}
                            </div>
                        @endif
                    </div>

                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Course Title</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($courses as $course)
                                                <tr>
                                                    <td>{{ $course->title }}</td>
                                                    <td>{{ Str::limit($course->description, 50) }}</td>
                                                    <td>{{ $course->category->name }}</td>
                                                    <td>{{ $course->price }}</td>
                                                    <td><a href="{{ route('dashboard.courses.edit', $course->id) }}">edit</a></td>
                                                    <td><a href="{{ route('dashboard.courses.delete', $course->id) }}">delete</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
