@extends('admin.layout.master')
@section('title', 'Edit Product')
@section('content')
    @include('admin.pages.products.__form', ['categories' => $categories, 'stores' => $stores,'update' => true, 'product' => $product])
@endsection
