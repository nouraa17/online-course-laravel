@extends('partial-components.admin.layouts.layout')
  @section('title', 'Edit Category')
<!-- page content -->
@section('content')
			<div class="right_col" role="main">
				<div class="">
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Edit Category</h2>

									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form  method="post" action="{{route('dashboard.categories.update',$category->id)}}"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @method('put')
                                        @csrf
										<div class="item form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category"> Category name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="add-category" name="name" value={{$category->name}} required="required" class="form-control ">
											</div>
										</div>
                                        <div class="item form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">decription <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="add-category" name="description" value={{$category->description}} required="required" class="form-control ">
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-success" value="update">Update</button>
											</div>
										</div>
                                        <div class="col-12">
                                            @if(session()->has('cancel'))
                                            <div class="alert alert-warning">
                                                {{session()->get('cancel')}}
                                            </div>
                                            @endif
                                        </div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
            @endsection
