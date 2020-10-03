<list-product>
    <div class="container">
        <div class="titlePrimary">
            {{$category->name ?? 'Sản phẩm'}}
        </div>
        <div class="filter">
            <div class="item">
                <select name="" id="">
                    <option value="">-- sorted by --</option>
                </select>
            </div>
            <div class="item">
                <select name="" id="">
                    <option value="">-- price --</option>
                </select>
            </div>
            <div class="item">
                <select name="" id="">
                    <option value="">-- size --</option>
                </select>
            </div>
            <div class="item">
                <select name="" id="">
                    <option value="">-- color --</option>
                </select>
            </div>
            <div class="item">
                <button>filter</button>
            </div>
        </div>
     @php
        $products = !empty($productPaginate) ? $productPaginate : $products;
     @endphp
        <div class="__product">
        @foreach($products as $product)
            <div class="item">
                <div class="image">
                    <a href="{{ url($product->slug)}}/product"><img src="{{url($product->image)}}" alt=""></a>
                    <div class="function">
                        <a href=""><i class="fal fa-heart"></i></a>
                        <a href=""><i class="fal fa-eye"></i></a>
                        <a href=""><i class="fal fa-shopping-cart"></i></a>
                    </div>
                </div>
                <h2>{{$product -> name}}</h2>
                <h2>
                @if($product -> discount)
                    <s>{{ number_format($product -> discount,0)}}$</s>
                @endif
                    <span>{{ number_format($product -> price,0)}} $</span>
                </h2>
            </div>
            @endforeach
@if(!empty($productPaginate))
            <div class="pagination">{{$productPaginate->links()}}</div>
        </div>
@endif
    </div>
</list-product>
