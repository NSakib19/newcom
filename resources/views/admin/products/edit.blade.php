<x-admin.layouts.admin_master>
    <div class="container-fluid p-0">
        <form action = "{{route('products.update',['product'=>$product->id])}}" method = "post" enctype = "multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product name</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_name"
                    value="{{old('product_name',$product->product_name)}}">

                </div>
            </div>


            

            

            

            

            

           

            

            

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product Price</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_price"
                    value="{{old('selling_price',$product->product_price)}}">

                </div>
            </div>


            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Short Description</label>
                <div class="col-sm-9">
                    <input
                    type = "text"
                    class= "form-control"
                    id = "inputTitle"
                    name = "short_descp"
                    value="{{old('short_descp',$product->short_descp)}}">

                </div>
            </div>

            

            

            

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Product Image</label>
                <div class="col-sm-9">
                    <input
                    type = "file"
                    class= "form-control"
                    id = "inputTitle"
                    name = "product_image"
                    value="{{old('product_image',$product->product_image)}}">

                </div>
            </div>


            

            <div class="mb-3 row">
                <label for="inputTitle" class="col-sm-3 col-form-label">
                    Brand Id
                </label>
                <div class="col-sm-9">
                    <select name="brand_id" class="form-select">
                        <option></option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                        @endforeach                        
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for = "inputTitle" class="col-sm-3 col-form-label">Category Id</label>
                <div class="col-sm-9">
                    <select name="category_id" class="form-select">
                        <option></option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"{{$category->id==$category->category_id ? 'selected':''}}>
                                {{$category->category_name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div> 

            


            <div class="mb-3 row">
                <div class="col-sm-9 offset-3">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
            
        </form>
    </div>
</x-admin.layouts.admin_master>
