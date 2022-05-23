@extends('layouts.template')

@section('title', 'Cart')
    
@section('css, javascript')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    @isset($items)
        @if (count($items) < 3)
            <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">    
        @endif
    @else
        <link rel="stylesheet" href="{{ asset('css/small-page.css') }}">
    @endisset
@endsection

@section('content')
    <main>
        <section id="cart">
            <h2>MY CART</h2>
            @isset ($items)
                @foreach ($items as $value)            
                    <article class="cart--miniview">
                        <section class="cart--img">
                            <img src="{{ $value->cover }}" alt="{{ $value->title }}">
                        </section>
                        <section class="cart--information">
                            <h1>{{ $value->title }}</h1>
                            <h2>Author: {{ $value->author }}</h2>
                            <p>Category: {{ $value->category }}</p>
                            <p>Quantity: {{ $value->quantity }}</p>
                            <p>Price: {{ 10 * $value->quantity }}&euro;</p>
                            <section class="cart--delete">
                                <form action="{{ route('cart.delete', $value->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit"><small>&#10539;</small></button>
                                </form>
                            </section>
                        </section>
                    </article>                    
                @endforeach
                <section class="cart-button">
                    <a href="{{ route('store.payment') }}">
                        <button type="submit" class="to-store">Buy</button>
                    </a>
                </section>
            @else
                <section id="cart--empty">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 487.925 487.925" style="enable-background:new 0 0 487.925 487.925;" xml:space="preserve">
                        <title>EMPTY</title>
                        <g transform="translate(0 -540.36)">
                            <g>
                                <g>
                                    <path d="M454.7,859.172l-30.5-30.7c-1.9-1.8-4.4-2.9-7.1-2.9s-5.2,1-7.1,2.9l-20.6,20.7c-3.9,3.9-3.9,10.2,0,14.1
                                        c3.9,3.9,10.2,3.9,14.1,0l13.5-13.6l16.4,16.5l-20.6,20.7H131.4c-2.7,0-5.2,1-7.1,2.9l-30.5,30.7c-3.9,3.9-3.9,10.2,0,14.1
                                        l30.5,30.7c1.9,1.8,4.4,2.9,7.1,2.9h240.1l10.5,10.6l-13.3,12.9c-3.9,3.8-4,10.1-0.2,14.1c2,2,4.6,3,7.2,3c2.5,0,5-0.9,7.1-2.7
                                        l20.6-20c1.9-1.9,3-4.4,3-7.1c0-2.6-1-5.2-2.9-7.1l-20.6-20.7c-1.9-1.8-4.4-2.9-7.1-2.9H135.7l-20.6-20.7l20.6-20.7h281.4
                                        c2.7,0,5.2-1,7.1-2.9l30.5-30.7C458.6,869.372,458.6,863.073,454.7,859.172z"/>
                                    <path d="M485,920.273l-20.6-20.7c-3.9-3.9-10.2-3.9-14.1,0c-3.9,3.9-3.9,10.2,0,14.1l13.6,13.7l-13.6,13.7
                                        c-3.9,3.9-3.9,10.2,0,14.1c2,1.9,4.5,2.9,7.1,2.9c2.6,0,5.1-0.9,7-3l20.6-20.7C488.9,930.473,488.9,924.173,485,920.273z"/>
                                    <path d="M284.1,855.273c24.5,0,47.5-9.4,64.8-26.6c17.4-17.2,26.9-40.2,26.9-64.8c0-50.7-41.2-92.1-91.7-92.1v0
                                        c-7.9,0-16,1.2-24.5,3.8c-20.6-39.9-61.9-65.2-107.5-65.2c-67.4,0-122.2,55.1-122.2,122.8c0,18.4,4.1,35.8,11.4,51.4H10
                                        c-5.5,0-10,4.5-10,10s4.5,10,10,10h42.9c22.2,30.7,58.4,50.7,99.1,50.7H284.1z M149.1,756.872l-30.5-30.7
                                        c-3.9-3.9-10.1-3.9-14-0.1l-20.6,20c-4,3.8-4.1,10.2-0.2,14.1c3.8,4,10.2,4.1,14.1,0.2l13.5-13.1l16.6,16.7l-20.6,20.7H63.7
                                        c-8.9-15.1-13.9-32.7-13.9-51.4c0-56.7,45.9-102.8,102.2-102.8c40.7,0,77.3,24.1,93.1,61.4c2.1,5,7.8,7.4,12.8,5.4
                                        c9.5-3.7,18.1-5.5,26.2-5.5c39.5,0,71.7,32.4,71.7,72.1c0,39.4-32.2,71.4-71.7,71.4v0H152c-28.6,0-54.4-11.7-73-30.7h32.5
                                        c2.7,0,5.2-1.1,7.1-2.9l30.5-30.7C153,767.072,153,760.772,149.1,756.872z"/>
                                    <path d="M408.2,676.373c1.8,3.5,5.3,5.5,8.9,5.5c1.5,0,3.1-0.4,4.5-1.1l15.6-8v19.4c0,5.5,4.5,10,10,10s10-4.5,10-10v-19.4
                                        l15.6,8c1.5,0.7,3,1.1,4.5,1.1c3.6,0,7.2-2,8.9-5.5c2.5-4.9,0.5-10.9-4.4-13.4l-12.6-6.4l12.6-6.4c4.9-2.5,6.9-8.5,4.4-13.4
                                        s-8.5-6.9-13.4-4.4l-15.6,8v-19.4c0-5.5-4.5-10-10-10s-10,4.5-10,10v19.4l-15.6-8c-4.9-2.5-10.9-0.5-13.4,4.4s-0.5,10.9,4.4,13.4
                                        l12.6,6.4l-12.6,6.4C407.7,665.473,405.7,671.473,408.2,676.373z"/>
                                    <path d="M295.9,624.873c1.8,3.5,5.3,5.5,8.9,5.5c1.5,0,3-0.3,4.5-1.1l16-8.1v19.1c0,5.5,4.5,10,10,10s10-4.5,10-10v-19l16,8.1
                                        c1.4,0.7,3,1.1,4.5,1.1c3.7,0,7.2-2,8.9-5.5c2.5-5,0.5-11-4.4-13.5l-12.8-6.4l12.8-6.4c4.9-2.5,6.9-8.5,4.4-13.4
                                        s-8.5-6.9-13.4-4.4l-16,8.1v-19.1c0-5.5-4.5-10-10-10s-10,4.5-10,10v19.1l-16-8.1c-4.9-2.5-10.9-0.5-13.4,4.4s-0.5,10.9,4.4,13.4
                                        l12.8,6.4l-12.8,6.4C295.4,613.973,293.4,619.973,295.9,624.873z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p>EMPTY</p>
                    <section class="cart-button">
                        <a href="{{ route('store.index') }}">
                            <button type="submit" class="to-store">Store</button>
                        </a>
                    </section>
                </section>
            @endisset
        </section>
    </main>
@endsection