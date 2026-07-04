<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ItemService;
use App\Http\Controllers\Api\BaseController;
use App\Models\Item;

class ItemController extends BaseController
{
    protected $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    public function index(Request $request)
    {
        $query = Item::with('category');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        return $this->success($query->get());
    }

    public function store(Request $request)
    {
        $item = $this->itemService->create($request->all());
        return $this->success($item);
    }

    public function update(Request $request, $id)
    {
        $item = $this->itemService->update($id, $request->all());
        return $this->success($item);
    }

    public function destroy($id)
    {
        $this->itemService->delete($id);
        return response()->json(null, 204);
    }
}
