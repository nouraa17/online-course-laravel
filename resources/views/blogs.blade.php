@extends('general-layout')
@section('title','Blogs')

@section('custom-style')
    @include('partial-components.blogs.blogs-style')
@endsection

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    @include('partial-components.blogs.partial-blogs')
@endsection
