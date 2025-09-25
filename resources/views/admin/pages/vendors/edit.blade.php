@extends('admin.layout.master')
@section('title', 'Edit Vendor')
@section('content')
    @include('admin.pages.vendors.__form', ['update' => true, 'vendor' => $vendor])
@endsection
