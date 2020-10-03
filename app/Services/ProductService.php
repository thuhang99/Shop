<?php
    namespace App\Services;
    use App\Models\Product;

    class ProductService
    {
        const PER_PAGE = 8;
        public function findBySlug($slug)
        {
            return Product::where(['slug' => $slug])->first();
        }


        public function getByCategoryId(array $categoryIds, int $productId = null)
        {
            $query = Product::join('category_product', function($query) use($categoryIds) {
                $query->on('category_product.product_id', 'products.id')
                    ->whereIn('category_id', $categoryIds);
            });

            if ($productId) {
                $query->where('products.id', '!=', $productId);
            }

            return $query->take(self::PER_PAGE)->get();
        }

        public function getNewest()
        {
            return Product::orderBy('id','DESC')->take(self::PER_PAGE)->get();
        }
    }

?>
