@extends('admin.layout.master')
@section('title', 'Edit Store')
@section('content')
    @include('admin.pages.stores.__form', [ 'update' => true, 'store' => $store])
@endsection
