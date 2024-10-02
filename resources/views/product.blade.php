@extends('productlayout')
@section('title', 'Product')
@section('content')

    <header>
        <a href="/Home" class="logo"><img src="Images/amplinkhub-favicon-color.png" alt="logo" > AmpLinkHub</a>

        <ul class="navlist">
            <li><a href="/Home">Home</a></li>
            <li><a href='/Services'>Products</a></li>
            <li><a href="/login">Batt & Tire Lifespan Tracker</a></li>
            <li><a href="/logout">Log Out</a></li>

        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <div class = "wrapper">
        <div class="category-filter">
            <div class="container">
                <div class="title">
                    <h1>Featured Products</h1>
                </div>

                <div class="filter-btns">
                    <button type="button" class="filter-btn" id="all">all</button>
                    <button type="button" class="filter-btn" id="best-sellers">best seller</button>
                    <button type="button" class="filter-btn" id="batteries">batteries</button>
                    <button type="button" class="filter-btn" id="tires">tires</button>
                </div>

                <div class="filter-items">
                    @foreach($products as $product)
                        <div class="filter-item all {{ $product->category }} {{ $product->is_best_seller ? 'best-sellers' : '' }}">
                            <div class="item-img">
                                <img src="{{ asset($product->image_path) }}" alt="Item image">
                            </div>
                            <div class="item-info">
                                <p>{{ $product->product_name }}</p>
                                <div>
                                    @if($product->old_price)
                                        <span class="old-price">${{ $product->old_price }}</span>
                                    @endif
                                    <span class="new-price">${{ $product->price }}</span>
                                </div>
                                <a href="#" class="add-btn">View</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <div class="scroll-down">
        <button class="ri-arrow-down-s-fill" onclick="scrollToBottom()"></button>

    </div>
    <script src="js/prodscript.js"></script>
