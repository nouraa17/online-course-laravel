@extends('partial-components.admin.layouts.layout')
@section('title','Edit Blog')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>Edit Blog</strong>
            </div>
            <div class="card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal ">

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="text-input">Blog Title</label>
                        <div class="col-md-9">
                            <input type="text" id="text-input" name="title" class="form-control" >
                            <span class="help-block">add blog title</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="textarea-input">Blog Description</label>
                        <div class="col-md-9">
                            <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 form-control-label" for="file-input">image</label>
                        <div class="col-md-9">
                            <input type="file" id="file-input" name="file-input">
                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> Edit</button>

            </div>
        </div>


    </div>



</div>



@endsection
