@extends('layout')
@section('title', 'Products')
@section('content')

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card shadow-sm" style="width: 18rem;">
                            <img src="{{ $product->photo }}" width="100%" height="225" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                                <p><strong>Price: </strong> {{ $product->price }} руб.</p>
                                <p class="btn-holder"><a href="{{ url('addtocart/' . $product->id) }}"
                                        class="btn btn-warning btn-block text-center" role="button">В корзину</a></p>
                                <p class="btn-holder"><a href="{{ url('delete/' . $product->id) }}" method="Get"
                                        class="btn btn-warning btn-block text-center" role="button">Удалить</a></p>
                                <p class="btn-holder"><a href="{{ route('product.editGet',   $product->id) }}"
                                        class="btn btn-warning btn-block text-center" role="button">Изменить</a></p>    
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
            <h6>
            </h6>
        </div>
    </div>
    <?php echo $products->links('pagination::bootstrap-5'); ?>
@endsection
