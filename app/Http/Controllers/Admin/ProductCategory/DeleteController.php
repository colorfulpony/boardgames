<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategory\UpdateRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(ProductCategory $productCategory)
    {
        $productCategory->delete();

        return response([], 200);
    }
}
