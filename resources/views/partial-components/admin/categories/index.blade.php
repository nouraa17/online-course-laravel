@extends('partial-components.admin.layouts.layout')
  @section('title', 'all categories')
  @section('content')

        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Categories</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-12">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @elseif(session()->has('cancel'))
                    <div class="alert alert-danger">
                        {{session()->get('cancel')}}
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
                          <th>Category Name</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>


                      <tbody>
                        @foreach ($categories as $category )


                        <tr>
                          <td>{{$category->name}}</td>
                          <td><a href="{{route('dashboard.categories.edit',$category->id)}}">edit</a></td>
                          <td><a href="{{route('dashboard.categories.delete',$category->id)}}">delete</a></td>
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
