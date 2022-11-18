@extends('layouts.app-minimal')

@section('content')
    <div class="w-full h-screen">
        <div class="container mx-auto h-full my-auto">
            <div class="flex flex-col justify-center items-center justify-content-center h-full align-middle">

                <h1 class="text-xl font-bold text-left w-full">Keranjang</h1>
                <div class="flex flex-row gap-5 w-full">
                    <section class="bg-white rounded-md shadow-lg w-full p-6">
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($data as $key => $data)
                        <div class="product-card">
                            <div class="product-card__title">
                                <strong class="text-sm">{{$data['seller_name']}}</strong>
                            </div>
                            @for ($i=0; $i<count($data['product']); $i++)
                            @php
                                $total += $data['product'][$i]['price'] * $data['product'][$i]['qty'];
                            @endphp
                            <div class="product-card__content">
                                <div
                                    class="product-card__product--wrapper flex flex-row gap-2 items-center justify-start px-2 py-4 flex-wrap">
                                    <div class="product-card__content--photo">
                                        @php
                                            $image = json_decode($data['product'][$i]['image']);
                                        @endphp
                                        @for ($s=0; $s<1; $s++)
                                            <img class="img-fluid" src="{{ url('/product_image/' . $image[0]) }}" width="150px" height="150px">
                                        @endfor
                                    </div>
                                    <div class="product-card__content--product-text">
                                        <div class="product-card__content--product-name">
                                            <span class="text-sm">
                                                Product Name : {{$data['product'][$i]['name']}}
                                            </span>
                                        </div>
                                        <div class="product-card__content--product-name">
                                            <span class="text-sm">
                                                Qty : {{$data['product'][$i]['qty']}}
                                            </span>
                                        </div>

                                        <div class="product-card__Cotnent--product-price text-sm font-bold">Price : Rp.{{$data['product'][$i]['price']}}</div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                        @endforeach
                    </section>
                    <section
                        class="bg-white shadow-lg rounded-md p-6 w-full flex flex-col justify-between grow-0 h-fit gap-y-3">
                        <h2 class="font-bold">Ringkasan Belanja</h2>
                        <div class="cart-summary__product-count text-sm flex flex-row justify-between">
                            <div class="cart-summary__product-count--title text-sm">Total Belanja</div>
                            <div class="cart-summary__product-count--price">
                                Rp. {{$total}}
                            </div>
                        </div>
                        <div class="cart-summary__product-count text-sm flex flex-row justify-between">
                            <div class="cart-summary__product-count--title text-sm">Total Diskon</div>
                            <div class="cart-summary__product-count--price">
                                Rp. 0
                            </div>
                        </div>
                        <hr />
                        <div class="cart-summary__product-count text-sm flex flex-row justify-between">
                            <div class="cart-summary__product-count--title text-sm font-bold">Total Harga</div>
                            <div class="cart-summary__product-count--price font-bold">
                                Rp. {{$total}}
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('buyer.payment') }}"><button class="bg-green-600 text-white rounded-md p-2 w-full">Beli</button></a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
