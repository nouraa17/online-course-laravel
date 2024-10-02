@extends('partial-components.admin.layouts.layout')
@section('title','Create Course')
@section('content')




<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Create Course</strong>
            </div>
            <div class="card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">
                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Course Title</label>
                        <div class="col-md-9">
                            <input type="text" id="text-input" name="title" class="form-control" >
                            <span class="help-block">add Course title</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="textarea-input">Course Description</label>
                        <div class="col-md-9">
                            <textarea id="textarea-input" name="description" rows="9" class="form-control" placeholder="Content.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category
                        <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6  ">
                        <select class="form-control" name="category_id" id="">
                            <option value=" ">Select Category</option>
                            @foreach($categories as $category)
                            <option  value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-dot-circle-o"></i> Create</button>

            </div>
        </div>


    </div>



</div>


@endsection

