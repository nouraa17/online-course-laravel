@extends('general-layout')
@section('title',' Testimonials')
@section('pageTitle','Testimonial')
@section('spinner')
    @include('partial-components.layout.spinner')
@endsection
@section('content')
@include('partial-components.layout.headerPart')
@include('partial-components.partial-testimonials')
@endsection
