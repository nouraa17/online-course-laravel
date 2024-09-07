@extends('general-layout')
@section('title','Course')

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    <div class="container my-5">
        @include('partial-components.course-landing.course-intro')
        @include('partial-components.course-landing.course-information')
        @include('partial-components.course-landing.packages')
        @include('partial-components.course-landing.recommended-courses')
        @include('partial-components.course-landing.course-instructor')
    </div>
@endsection
