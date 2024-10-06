<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;

trait Deletable
{
    /**
     * Delete a record by ID.
     *
     * @param string $modelClass
     * @param int $id
     * @return JsonResponse
     */
    public function deleteRecord(string $modelClass, int $id): JsonResponse
    {
        // Ensure the model class exists
        if (!class_exists($modelClass)) {
            return response()->json(['success' => false, 'message' => 'Model not found.'], 404);
        }

        // Find the record by ID
        $model = $modelClass::find($id);

        if ($model) {
            $model->delete();
            return response()->json(['success' => true, 'message' => 'Record deleted successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Record not found.'], 404);
    }
}

