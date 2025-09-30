@props([
    'product' => null,
    'categories' => [],
    'stores' => [],
    'update' => false,
])
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">{{ $update ? 'Edit Product' : 'Create Product' }}</h3>
            </div>
            <form action="{{ $update ? route('admin.products.update', $product->id) : route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if($update)
                    @method('PUT')
                @endif
                <div class="card-body">
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Product Name" value="{{ $product ? $product->name : '' }}" name="name">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" id="category_id" class="form-control ">
                                    <option value="" disabled selected>Select Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product && $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                        @endforeach
                                </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="store_id">Select Store</label>
                                    <select name="store_id" id="store_id" class="form-control">
                                        <option value="" disabled selected>Select Store</option>
                                        @foreach ($stores as $store)
                                        <option value="{{ $store->id }}"
                                            {{ $product && $product->store_id == $store->id ? 'selected' : '' }}>
                                            {{ $store->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                                    <div class="form-group col-md-6">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control" id="price" placeholder="Enter Product Price" value="{{ $product ? $product->price : '' }}" name="price">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="stock">Stock</label>
                                        <input type="number" class="form-control" id="stock" placeholder="Enter Product Stock" value="{{ $product ? $product->stock : '' }}" name="stock">
                                    </div>
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea class="form-control" rows="3" name="description">{{ $product ? $product->description : '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="images[]" multiple>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload Images</span>
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
