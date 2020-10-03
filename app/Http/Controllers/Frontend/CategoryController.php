<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Service\Product;
class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
   public function index($slug)
   {
       $category= $this->categoryService->findBySlug($slug);
       $products = $this->categoryService->getProducts($category);
       return view('frontend.categories.index',
       [
           'category' => $this->categoryService->findBySlug($slug),
           'productPaginate' => $products
       ]);
   }
}
