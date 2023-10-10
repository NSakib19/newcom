<x-admin.layouts.admin_master>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Create Products</h5>
                </div>
                <div class="pull-right">
                    <a class="btn btn-info ms-4" href="{{route('products.create')}}">Back</a>
                    
                </div>
                <li class="breadcrumb-item active" aria-current="page">Total Products<span class="badge rounded-pill bg-danger">{{count($products)}}</span>

                </li>
            
                <table class="table table-hover my-0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th class="d-none d-xl-table-cell">Name</th>
                        <th class="d-none d-xl-table-cell">Picture</th>
                        <th class="d-none d-xl-table-cell">Price</th>
                        <th class="d-none d-xl-table-cell">Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key =>$product)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td class="d-none d-xl-table-cell">{{$product->product_name}}</td>
                            <td><img src="{{asset("$product->product_image")}}" style="width: 70px; height: 40px"></td>
                            <td class="d-none d-xl-table-cell">{{$product->product_price}}</td>
                            {{-- <td class="d-none d-xl-table-cell">{{$product->product_qty}}</td> --}}
                            
                            {{-- <td>
                                @if($product->discount_price == NULL )
                                <span class="badge rounded-pill bg-info">No Discount</span>
                                @else
                                @php
                                 $amount = $product->selling_price - $product->discount_price;
                                 $discount = ($amount/$product->selling_price)*100;
                                @endphp 
                                    <span class="badge rounded-pill bg-danger">{{round($discount)}}%</span>
                                @endif
                            </td> --}}

                            <td>
                                @if($product->status == 1)
                                <span class="badge rounded-pill bg-info">Active</span>
                                @else
                                <span class="badge rounded-pill bg-danger">InActive</span>
                                @endif
                            </td>

                            <td><a class="btn btn-info btn-sm" href="{{route('products.show',['product'=>$product->id])}}">Show</a>
                            <a class="btn btn-info btn-sm" href="{{route('products.edit',['product'=>$product->id])}}">Edit</a><form style="display: inline" action="{{route('products.destroy',['product'=>$product->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('are you sure want to delete?')">Delete</button>
                                @if($product->status == 1)
                                {{-- <a href="{{route('product.inactive',$product->id)}}" class="btn btn-primary" title="Inactive"><i class="fa-solid fa fa-thumbs-up"></i></a> --}}
                                @else
                                <a href="{{route('product.active',$product->id)}}" class="btn btn-primary" title="Active"><i class="fa-solid fa fa-thumbs-down"></i></a>
                                @endif
                            </form>
                        </td>
                        

                            
                            
                                    {{-- <td class="d-none d-md-table-cell">Vanessa Tucker</td> --}}
                        </tr>
                            
                        @endforeach
                    
                    
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-admin.layouts.admin_master>
