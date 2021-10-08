<?php

namespace App\Http\Controllers\Api\Freight;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Freight\FreightRequest;
use App\Services\Api\Freight\FreightService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class FreightController extends Controller
{
    private FreightService $freightService;

    public function __construct(FreightService $freightService)
    {
        $this->freightService = $freightService;
    }

    public function index(): JsonResponse
    {
        try {
            $freight = $this->freightService->all();
            return response()->json([
                'data' => $freight,
                'message' => 'Listed Success']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()],400);
        }
    }

    public function store(FreightRequest $request): JsonResponse
    {
        try {
            DB::beginTransaction();
            $freight = $this->freightService->create($request->validated());
            DB::commit();
            return response()->json([
                'data' => $freight,
                'message' => 'Successfully Created'], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()],400);
        }
    }

    public function update(FreightRequest $request, string $id): JsonResponse
    {
        try {
            DB::beginTransaction();
            $freight = $this->freightService->update($id, $request->validated());
            DB::commit();
            return response()->json([
                'data' => $freight,
                'message' => 'Updated Successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()],400);
        }
    }

    public function destroy(string $id): JsonResponse
    {
        try {
            DB::beginTransaction();
            $freight = $this->freightService->delete($id);
            DB::commit();
            return response()->json([
                'data' => $freight,
                'message' => 'Successfully Deleted'],204);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
