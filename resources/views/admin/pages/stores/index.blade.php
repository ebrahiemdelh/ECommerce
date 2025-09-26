@extends('admin.layout.master')
@section('title', 'Stores')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Stores</h3>
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
                        <th>Owner</th>
                        <th>Phone</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $store)
                        <tr>
                            <td>{{$store->id}}</td>
                            <td>{{$store->name}}</td>
                            <td>{{$store->vendor_id->name}}</td>
                            <td>{{$store->phone}}</td>
                            {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                            <td>
                                <a href="{{route('admin.stores.edit', $store->id)}}"
                                    class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{route('admin.stores.destroy', $store->id)}}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this store?')">Delete</button>
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
