@props([
    'update' => false,
    'category' => null,
])
<div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">{{ $update ? 'Edit Category' : 'Create Category' }}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ $update ? route('admin.categories.update', $category->id) : route('admin.categories.store') }}" method="POST">
                    @csrf
                    @if($update)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Category Name" value="{{ $category ? $category->name : '' }}" name="name">
                        </div>
                        <div class="form-group">
                            <label>Category Description</label>
                            <textarea class="form-control" rows="3" name="description">{{ $category ? $category->description : '' }}</textarea>
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
