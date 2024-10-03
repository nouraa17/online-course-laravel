@extends('partial-components.admin.layouts.layout')
@section('title','Create Category')
@section('content')
<div class="x_content">
    <br />
    <form method="POST" action="{{route('dashboard.categories.store')}}" id="demo-form2" data-parsley-validate
        class="form-horizontal form-label-left">
        @csrf
        <div class="item form-group row">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">Add
                Category <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" id="add-category" required="required" class="form-control" name="name"
                    value={{old('name')}}>
            </div>
        </div>
        @error('name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="item form-group row">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">description
              <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input type="text" id="add-category" required="required" class="form-control" name="description"
                    value={{old('name')}}>
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">

                <button type="submit" class="btn btn-success" value="add">Add</button>
            </div>
        </div>
    </form>
</div>
@endsection
