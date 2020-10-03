<?php
    namespace App\Services;
    use App\Models\Category;

    class CategoryService
    {
        const PEAR_PAGE = 8;
        public function menus($limit = 6)
        {
            return Category::take($limit)->get();
        }

        public function findBySlug($slug)
        {
            return Category::where(['slug'=>$slug])->first();
        }

        public function getProducts(Category $category)
        {
            return $category->products()->paginate(self::PER_PAGE);
        }
    }

?>
