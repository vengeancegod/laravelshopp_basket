@extends('layout')
@section('title', 'Корзина')
@section('content')
    <section class="h-100 h-custom" style="background-color: #FFFFFF;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Корзина</h1>
                                            @if ($cartItems)
                                                <h6 class="mb-0 text-muted">кол-во: {{ count($cartItems) }} </h6>
                                            @endif
                                        </div>
                                        <hr class="my-4">

                                        @if ($cartItems)
                                            @foreach ($cartItems as $item)
                                                <form action="{{ route('cart.update') }}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="text" id="id" name="id"
                                                        value="{{ $item['id'] }}" hidden>
                                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                                            <img src="{{ $item['photo'] }}" class="img-fluid rounded-3"
                                                                alt="...">
                                                        </div>
                                                        <div class="col-md-3 col-lg-3 col-xl-3">
                                                            <h6 class="text-black mb-0">{{ $item['name'] }}</h6>
                                                        </div>
                                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                            <button class="btn btn-link px-2"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                <i class="fas fa-minus"></i>
                                                            </button>

                                                            <input id="quantity" min="0" name="quantity"
                                                                value="{{ $item['quantity'] }}" type="number"
                                                                class="form-control form-control-sm" />

                                                            <button class="btn btn-link px-2"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                            <h6 class="mb-0">
                                                                {{ $item['price'] * $item['quantity'] . '.00 руб' }}
                                                            </h6>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="#!" class="text-muted"><i
                                                                    class="fas fa-times"></i></a>
                                                        </div>
                                                    </div>

                                                    <input type="submit" class="btn btn-success btn-sm text-white btn-dark"
                                                        value="Обновить">
                                                    <hr class="my-4">
                                                </form>
                                            @endforeach
                                        @endif
                                        @if ($cartItems)
                                            <div>
                                                <h6 class="mb-0"><a href="/clear" class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Очистить список</a>
                                                </h6>
                                            </div>
                                        @endif

                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="/" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Назад на главную</a>
                                            </h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Итого</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            @if ($cartItems)
                                                <h5 class="text-uppercase">К оплате: </h5>
                                                <h5><?php
                                                $sum = 0;
                                                foreach ($cartItems as $key => $value) {
                                                    $sum += $value['quantity'] * $value['price'];
                                                }
                                                echo $sum . ' рублей';
                                                ?>
                                                </h5>
                                            @endif
                                        </div>
                                        <hr class="my-4">
                                        @if($cartItems)
                                        <button type="button" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Оплатить</button>
                                        @endif                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
