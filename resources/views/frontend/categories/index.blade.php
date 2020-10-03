@extends('layouts.frontend.master')

@section('page_title', $category->meta_title ?? $category->name)
@section('page_desc', $category->meta_desc ?? $category->name)
@section('meta_keyword', $category->meta_keyword ?? $category->name)

@section('main_content')
	@include('frontend.products._list', [
		'category'        => $category,
		'productPaginate' => $productPaginate,
	])
@endsection
