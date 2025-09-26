@extends('admin.layout.master')
@section('title', 'Create Product')
@section('content')
    @include('admin.pages.products.__form', ['categories' => $categories, 'stores' => $stores])
@endsection
