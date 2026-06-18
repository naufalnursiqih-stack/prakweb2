<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ItemService;
use App\Http\Controllers\Api\BaseController;
use App\Models\Item;

class ItemController extends BaseController
{

    public function index(Request $request)
    {
        $query = Item::with('category');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        return $this->success($query->get());
    }
}
