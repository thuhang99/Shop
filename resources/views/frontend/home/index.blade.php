@extends('layouts.frontend.master')

@section('main_content')

    @include('frontend.home._category')
    <x-shipping></x-shipping>
    @include('frontend.home._bestpick')
    @include('frontend.products._list',['products' => $products])
@endsection

