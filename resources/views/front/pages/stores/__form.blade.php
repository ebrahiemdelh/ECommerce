@props([
    'update' => false,
    'store' => null,
])
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">{{ $update ? 'Edit Store' : 'Create Store' }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ $update ? route('admin.stores.update', $store->id) : route('admin.stores.store') }}" method="POST">
                    @csrf
                    @if($update)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Store Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Store Name" value="{{ $store ? $store->name : '' }}" name="name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="vendor">Store Owner</label>
                                    <input type="text" class="form-control" id="vendor" placeholder="Enter Store Owner" value="{{ $store ? $store->vendor_id : '' }}" name="vendor_id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Phone Number</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" value="{{ $store ? $store->phone : '' }}" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Store Description</label>
                            <textarea class="form-control" rows="3" name="description">{{ $store ? $store->description : '' }}</textarea>
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
