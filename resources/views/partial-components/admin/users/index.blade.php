@extends('partial-components.admin.layouts.layout')
@section('title','Users')

@section('content')


<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> All Blogs
                    </div>
                    <div class="card-block">
                        <table class="table">
                            <thead>
                                <tr>
                                    <tr>
                                        <th>Firt Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>type</th>
                                        <th>Operations</th>


                                    </tr>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td>neama</td>
                                    <td>ahmed</td>
                                    <td>neama@yahoo.com</td>
                                    <td>01000000000</td>
                                    <td>egypt</td>
                                    <td>USR</td>
                                    <td>
                                        <a href="" class="btn btn-outline-primary">Edit</a>


                                        <form action="" method="post" class="d-inline">

                                            <input class="btn btn-outline-danger" type="submit" value="delete">
                                        </form>
                                    </td>
                            </tr>
                            </tbody>
                        </table>
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Prev</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/col-->

        </div>



    </div>
</div>











@endsection
