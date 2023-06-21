<x-sg-master>

    <form action="{{ route('updateproduct') }}" method="POST">
    @csrf

        <fieldset class="mb-3" style="margin-top: 13%;">
        
            <legend class="text-uppercase font-size-sm font-weight-bold">Add Product</legend>
            <input name="id" type="hidden" value="{{$editData->id}}" required>

            <!-- Custom message -->
            <div class="form-group row">
                <label class="col-form-label col-lg-3">Title <span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <input type="text" name="title" class="form-control" required="" placeholder="Enter product name" value="{{$editData->title}}">
                </div>
            </div>
            <!-- /custom message -->


            <!-- URL validation -->
            <div class="form-group row">
                <label class="col-form-label col-lg-3">Caption<span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <input type="text" name="caption" class="form-control" required="" placeholder="Enter product description" value="{{$editData->caption}}">
                </div>
            </div>
            <!-- /url validation -->


            <!-- Numbers only -->
            <div class="form-group row">
                <label class="col-form-label col-lg-3">Price <span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <input type="text" name="price" class="form-control" required="" placeholder="Enter product price" value="{{$editData->price}}">
                </div>
            </div>
            <!-- /numbers only -->

            <!-- Styled file uploader -->
            <div class="form-group row">
                <label class="col-form-label col-lg-3">Image <span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <div class="d-flex"><input type="file" name="src" value="{{$editData->src}}"><span class="action btn bg-blue legitRipple" style="user-select: none;">Choose File</span></div>
                </div>
            </div>
            <!-- /styled file uploader -->

            <div class="form-group row">
                <label class="col-form-label col-lg-3">Select Catagory <span class="text-danger">*</span></label>
                <div class="col-lg-9">
                    <select name="catagory" class="form-control" required="">
                        <option value="{{$editData->catagory}}">Choose an option</option>
                            <option>Men</option>
                            <option>Women</option>
                            <option>Baby</option>
                    </select>
                </div>
            </div>

        </fieldset>

        <div class="d-flex justify-content-end align-items-center">
            <button type="submit" class="btn btn-primary ml-3 legitRipple">Update <i class="icon-paperplane ml-2"></i></button>
        </div>

    </form>
</x-sg-master>