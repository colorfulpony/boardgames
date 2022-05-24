<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\ProductCategoryRepository;

class EditController extends Controller
{
    public function __invoke(ProductCategoryRepository $productCategoryRepository, $id,  )
    {
        $item = $productCategoryRepository->getEdit($id);

        return $item;
    }
}
