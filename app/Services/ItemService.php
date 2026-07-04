<?php

namespace App\Services;

use App\Models\Item;
use Illuminate\Support\Facades\Log;

class ItemService
{
    public function create(array $data)
    {
        $item = Item::create($data);

        Log::info('Item created', [
            'id' => $item->id,
            'data' => $data
        ]);

        return $item;
    }

    public function update($id, array $data)
    {
        $item = Item::findOrFail($id);
        $item->update($data);

        Log::info('Item updated', [
            'id' => $id,
            'changes' => $data
        ]);

        return $item;
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        Log::info('Item deleted', [
            'id' => $id
        ]);

        return true;
    }
}
