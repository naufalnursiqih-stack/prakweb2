<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\BaseController;
use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends BaseController
{
    public function index()
    {
        $items = Item::all();
        return $this->success($items, 'Items retrieved successfully.');
    }

    public function store(StoreItemRequest $request)
    {
        $item = Item::create($request->validated());
        return $this->success($item, 'Item created successfully.', 201);
    }

    public function show($id)
    {
        $item = Item::find($id);

        if (!$item) {
            return $this->error('Item not found.', 404);
        }

        return $this->success($item, 'Item retrieved successfully.');
    }

    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->validated());
        return $this->success($item, 'Item updated successfully.');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return $this->success([], 'Item deleted successfully.');
    }
}
