<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategory\StoreRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $results = ProductCategory::firstOrCreate($data);

        return $results;
    }
}
