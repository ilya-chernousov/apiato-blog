@extends('layouts.main', ['pageTitle' => 'Корзина'])

@section('content')
    <section class="cart">
        <h1 class="cart__title text-2xl font-bold">Корзина</h1>
        <div class="cart__products">
            @foreach($cartProducts as $cartProduct)
                <div class="cart__product w-full border rounded-xl border-slate-300 mt-3 p-4">
                    <div class="cart__product-img-block">
                        <img src="{{ $cartProduct->product->getFirstMediaUrl('products') }}" alt="" class="cart__product-img w-full">
                    </div>
                    <div class="cart__product-info">
                        <div class="cart__product-name">{{ $cartProduct->product->name }}</div>
                        <form action="{{ route('cart-products.destroy', ['cartProduct' => $cartProduct->id]) }}" method="post" class="cart__product-delete mt-1">
                            @csrf
                            @method('delete')
                            <button type="submit" class="cart__product-delete-button text-red-600">Удалить</button>
                        </form>
                    </div>
                    <div class="cart__product-results">
                        <div class="cart__product-count flex gap-2">
                            @if($cartProduct->count > 1)
                                <form action="{{ route('cart-products.update', ['cartProduct' => $cartProduct->id]) }}" method="post" class="cart__product-count-action flex items-center">
                                    @csrf
                                    @method('patch')
                                    <input type="hidden" name="product_id" value="{{ $cartProduct->product->id }}">
                                    <input type="hidden" name="count" value="{{ $cartProduct->count - 1 }}">
                                    <button
                                        type="submit"
                                        class="cart__product-count-action-button text-lg font-semibold"
                                    >
                                        -
                                    </button>
                                </form>
                            @else
                                <form action="{{ route('cart-products.destroy', ['cartProduct' => $cartProduct->id]) }}" method="post" class="ccart__product-count-action flex items-center">
                                    @csrf
                                    @method('delete')
                                    <button
                                        type="submit"
                                        class="cart__product-count-action-button text-lg font-semibold"
                                    >
                                        -
                                    </button>
                                </form>
                            @endif
                            <input
                                type="number"
                                name=""
                                id=""
                                class="cart__product-count-input p-1.5 border border-gray-700 rounded-lg text-center"
                                value="{{ $cartProduct->count }}"
                                disabled
                            >
                            <form action="{{ route('cart-products.update', ['cartProduct' => $cartProduct->id]) }}" method="post" class="cart__product-count-action flex items-center">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="product_id" value="{{ $cartProduct->product->id }}">
                                <input type="hidden" name="count" value="{{ $cartProduct->count + 1 }}">
                                <button
                                    type="submit"
                                    class="cart__product-count-action-button text-lg font-semibold"
                                    {{ $cartProduct->count >= $cartProduct->product->count ? 'disabled' : '' }}
                                >
                                    +
                                </button>
                            </form>
                        </div>
                        <div class="cart__product-sum text-center mt-1">
                            <span>{{ $cartProduct->product->price * $cartProduct->count }}</span> руб.
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="cart__result mt-5">
            <p class="cart__result-text text-lg">
                Итого: <span class="font-medium">{{ $cartResults->count }} шт.</span> на <span class="font-medium">{{ $cartResults->totalSum }} руб.</span>
            </p>
        </div>
    </section>
@endsection
