<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ProductCategory\ProductCategoryResource;
use App\Models\ProductCategory;
use App\Repositories\Admin\ProductCategoryRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $productCategoryRepository;

    public function __construct()
    {
        $this->productCategoryRepository = app(ProductCategoryRepository::class);
    }

    public function __invoke()
    {
        $productCategories = $this->productCategoryRepository->getProductCategoriesForIndex();
        // dd($productCategories);
        // $paginator = $this->productCategoryRepository->getProductCategoriesWithPaginate(5);
        return ProductCategoryResource::collection($productCategories);
    }
}
