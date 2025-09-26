@extends('admin.layout.master')
@section('title', 'Vendors')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Vendors</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Store</th>
                        <th>Country Code</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vendors as $vendor)
                        <tr>
                            <td>{{$vendor->id}}</td>
                            <td>{{$vendor->name}}</td>
                            <td>{{$vendor->email}}</td>
                            {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                            <td>{{$vendor->address}}</td>
                            <td>{{$vendor->store->name}}</td>
                            <td>{{$vendor->country_code}}</td>
                            <td>
                                <a href="{{route('admin.vendors.edit', $vendor->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{route('admin.vendors.destroy', $vendor->id)}}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this vendor?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
