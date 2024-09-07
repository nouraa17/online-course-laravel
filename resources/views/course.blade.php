@extends('general-layout')
@section('title','Course')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    <div class="container my-5">
        @include('partial-components.course.course-info')
        @include('partial-components.course.course-videos')
    </div>
@endsection
