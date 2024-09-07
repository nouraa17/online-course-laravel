@extends('general-layout')
@section('title','Instructor')

@section('custom-style')
    <style>
        body {
            background-color: #f8f9fa;
        }
        .section-tit {
            color: #198754;
            margin-bottom: 15px;
        }
        .content-item {
            margin-bottom: 15px;
        }
        .portfolio-section,
        .portfolio-section>div,
        .portfolio-section>p {
            direction: rtl;
            text-align: right;
        }
    </style>
@endsection

@section('spinner')
    @include('partial-components.layout.spinner')
@endsection

@section('content')
    @include('partial-components.partial-portfolio')
@endsection
