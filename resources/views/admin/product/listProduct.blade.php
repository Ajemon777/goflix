@extends('admin.master')
@section('content')


<div class="row">
    <div class="col-md-12">
      <a href="{{ url('/product/add') }}"><button class="btn btn-sm btn-danger pull-right">Add New Product</button></a>
    </div>
</div>


<div class="row">
    <h3 class="text-center success_msg" style="color: #04004e;"></h3>
    <?php 
        if(Session::get('message'))
        {
    ?>
        <script type="text/javascript">
            jQuery(function($){
                $('.success_msg').html('<?php echo Session::get('message') ?>').fadeIn().delay(2000).fadeOut('slow');
            });
        </script>

    <?php } ?>
    <br>
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Manage Product
            </header>
            <div class="panel-body">
                <div class="table-responsive text-center">
                    <table class="table rable-hover table-bordered">
                        <thead>
                            <tr style="background: #513d65;">
                                <td>Serial</td>
                                <td>Product Name</td>
                                <td>Image</td>
                                <td>Price</td>
                                <td>Manufacture</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sl=1; ?>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $sl++ }}</td>
                                <td>{{ $product->productName }}</td>
                                <td><img src="{{ asset('public/products/'.$product->media_src) }}" width="70"></td>
                                <td>{{ $product->productRegularPrice }}</td>
                                <td>{{ $product->manufactureName }}</td>
                                <td>{{ $product->status == '1' ? 'Published' : 'Unpublish' }}</td>
                                <td>
                                    <a href="{{ url('/product/viewProduct/'.$product->id)  }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('/product/editProduct/'.$product->id)  }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ url('/product/deleteProduct/'.$product->id)  }}" onclick="return confirm('Are You Sure !');">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
@endsection