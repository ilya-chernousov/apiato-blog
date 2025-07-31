@extends('layouts.main', ['pageTitle' => 'Товары'])

@section('content')
    <section class="products">
        <h1 class="products__title text-2xl font-bold">Товары</h1>
        <div class="products__list mt-5 grid grid-cols-4 gap-4">
            @foreach($products as $product)
                <div class="products__list-item p-4 border rounded-xl border-slate-300 hover:shadow-lg">
                    <div class="products__list-item-img-block">
                        <img src="{{ $product->getFirstMediaUrl('products') }}" alt="" class="products__list-item-img w-full">
                    </div>
                    <h3 class="products__list-item-name mt-3 text-lg">Товар</h3>
                    <div class="products__list-item-price font-medium mt-1">590 руб.</div>
                    <div class="products__list-item-button mt-3">
                        @if($cartProducts->contains('product_id', $product->id))
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $cartProducts->where('product_id', $product->id)->first()->id }}">
                                <button type="submit" class="products__list-item-button-add w-full text-center p-3 border rounded-lg border-orange-600 hover:bg-orange-400">Удалить</button>
                            </form>
                        @else
                            <form action="{{ route('cart-products.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="count" value="1">
                                <button type="submit" class="products__list-item-button-add w-full text-center p-3 border rounded-lg border-orange-600 hover:bg-orange-400">В корзину</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
