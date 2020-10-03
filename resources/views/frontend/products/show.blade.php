@extends('layouts.frontend.master')

@section('page_title', $product->meta_title ?? $product->name)
@section('page_desc', $product->meta_desc ?? $product->name)
@section('meta_keyword', $product->meta_keyword ?? $product->name)

@section('main_content')

<div class="subDetail">
    <div class="container">
        <a href="/" title="Trang chủ">Trang chủ</a> /
        <a href="">{{ $product->name }}</a>
    </div>
</div>


<div class="detailProduct">
    <div class="container">
        <div class="item">
            <div class="gallery">

                <div class="previews">
                    <a href="#" class="selected" data-full="images/top1large.jpg">
                        <img src="{{ url('images/top1small.jpg') }}" alt=""/>
                    </a>
                    <a href="#" data-full="{{ url('images/top1small.jpg') }}">
                        <img src="{{ url('images/top1small.jpg') }}" alt=""/>
                    </a>
                    <a href="#" data-full="{{ url('images/top1small.jpg') }}">
                        <img src="{{ url('images/top1small.jpg') }}" alt=""/>
                    </a>
                    <a href="#" data-full="{{ url('images/top1small.jpg') }}">
                        <img src="{{ url('images/top1small.jpg') }}" alt=""/>
                    </a>
                    <a href="#" data-full="{{ url('images/top1small.jpg') }}">
                        <img src="{{ url('images/top1small.jpg') }}" alt=""/>
                    </a>
                </div>
                <div class="full"><img src="{{ url($product->image) }}"/></div>
            </div>
            <div class="detail">
                <h1>{{ $product->name }}</h1>
                <h2>{{ number_format($product->price, 0) }} $</h2>
                <ul>
                    <li>SKU: <span>{{ $product->sku }}</span></li>
                    <li>
                    	{{ $product->description }}
                    </li>
                </ul>
               <button>ADD TO CART</button>
            </div>
        </div>
    </div>
</div>
<div style="clear: both"></div>

<div class="container">
    <div class="moreProduct">
        Sản phẩm liên quan
    </div>

</div>

<list-product>
<div class="container">
        <div class="__product">
        	@foreach($products as $product)
                <div class="item">
                    <div class="image">
                        <a href="{{ url($product->slug) }}/product">
                            <img src="{{ url($product->image) }}" alt="{{ $product->name }}" />
                        </a>
                    </div>
                    <h2>{{ $product->name }}</h2>
                    <h2>
                        @if ($product->discount)
                        <s>{{ number_format($product->discount, 0) }}</s>
                        @endif
                        <span>{{ number_format($product->price, 0) }} $</span>
                    </h2>
                </div>
            @endforeach
        </div>
    </div>
</list-product>

<style>
    .alert {
        position: relative;
        padding: .75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: .25rem;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        width: 60%;
        margin-top: 10px;
    }

    .add-to-cart {
        background: #ff6f61;
        display: block;
        line-height: 45px;
        text-align: center;
        font-family: inherit;
        font-weight: 600;
        color: #fff;
        border: none;
        width: 60%;
        height: 45px;
        font-size: 20px;
        margin-top: 20px;
        cursor: pointer;
    }
</style>
@endsection
