<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategory\UpdateRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, ProductCategory $productCategory)
    {
        $data = $request->validated();
        $productCategory->update($data);

        return $productCategory;
    }
}
