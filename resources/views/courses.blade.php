@extends('general-layout')
@section('title',' All Courses')
@section('pageTitle','Courses')
@section('spinner')
    @include('partial-components.layout.spinner')
@endsection
@section('content')
@include('partial-components.layout.headerPart')
@include('partial-components.coursesCategoriesSec')
@include('partial-components.coursesSection')
@include('partial-components.partial-testimonials')
@endsection










