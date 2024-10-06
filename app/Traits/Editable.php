<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait Editable
{
    /**
     * Edit a record by ID.
     *
     * @param string $modelClass
     * @param int $id
     * @return JsonResponse
     */

     public function EditRecord(string $modelClass, int $id): JsonResponse
     {
        return response()->json([]);
     }
}
