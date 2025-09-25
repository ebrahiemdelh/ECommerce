@extends('admin.layout.master')
@section('title', 'Edit Product')
@section('content')
    @include('admin.pages.users.__form', ['update' => true, 'user' => $user])
@endsection
