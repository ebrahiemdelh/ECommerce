@props([
    'vendor' => null,
    'ctores' => [],
    'update' => false,
])
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">{{ $update ? 'Edit Vendor' : 'Create Vendor' }}</h3>
            </div>
            <form action="{{ $update ? route('admin.vendors.update', $vendor->id) : route('admin.vendors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($update)
                    @method('PUT')
                @endif
                <div class="card-body">
                        <div class="form-group">
                            <label for="name">Vendor Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Vendor Name" value="{{ $vendor ? $vendor->name : '' }}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{ $vendor ? $vendor->email : '' }}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone address</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone" value="{{ $vendor ? $vendor->phone : '' }}" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="address" class="form-control" id="address" placeholder="Enter Address" value="{{ $vendor ? $vendor->address : '' }}" name="address">
                        </div>
                        <div class="form-group">
                            <label for="country_code">Country Code</label>
                            <input type="text" class="form-control" id="country_code" placeholder="Enter Country Code" value="{{ $vendor ? $vendor->country_code : '' }}" name="country_code">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image_url">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload Image</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
            </form>
        </div>
    </div>
</div>
