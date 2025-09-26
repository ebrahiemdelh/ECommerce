@extends('admin.layout.master')
@section('title', 'Edit Category')
@section('content')
    @include('admin.pages.categories.__form', [ 'update' => true, 'category' => $category])
@endsection
