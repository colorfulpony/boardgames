<?php

namespace App\Http\Controllers\Admin\ProductCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCategory\StoreRequest;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->input();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        ProductCategory::firstOrCreate($data);

        return response(['Added', 200]);
    }
}
