<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchExampleDataRequest;
use App\Http\Resources\ExampleDataResource;
use App\Models\ExampleData;
use Illuminate\Http\JsonResponse;

class ExampleDataController extends Controller
{
    public function fetch(SearchExampleDataRequest $request): JsonResponse
    {
        $validated = $request->validated();
        $search = $validated['search'] ?? '';
        /** @var int */
        $offset = $validated['offset'] ?? 0;
        /** @var int */
        $amount = $validated['amount'] ?? 8;

        return is_string($search) ?
            response()->json(
                ExampleDataResource::collection(
                    ExampleData::query()
                        ->select('id', 'username', 'first_name', 'last_name')
                        ->search($search)
                        ->orderBy('first_name')
                        ->orderBy('last_name')
                        ->skip($offset)
                        ->limit($amount)
                        ->get()
                ),
                200
            ) :
            response()->json(null, 200);
    }
}
