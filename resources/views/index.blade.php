@extends('general-layout')
@section('title','Home')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    @include('partial-components.header')
    @include('partial-components.slider')
    @include('partial-components.services')
    @include('partial-components.partial-about')
    @include('partial-components.categories')
    @include('partial-components.courses')
    @include('partial-components.partial-testimonials')
@endsection
