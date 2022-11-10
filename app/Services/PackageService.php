<?php
declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\PackageResource;
use App\Models\Package;
use Illuminate\Http\JsonResponse;

class PackageService
{

    public function getPackages(): JsonResponse
    {
        return response()->json([
            'data' => PackageResource::collection(Package::paginate(10))
        ]);
    }

    public function storePackage($request): JsonResponse
    {
        $package = new Package();
        $package->name = $request->name;
        $package->price = $request->price;
        $package->ticket_slots = $request->ticket_slots;
        $package->discount = $request->discount;
        $package->save();

        return response()->json([
            'message' => 'Package Added Successfully',
            'data' => PackageResource::collection($package)
        ], 201);
    }

    public function showPackage($package): JsonResponse
    {
        return response()->json([
            'data' => PackageResource::collection(Package::find($package))
        ]);
    }

    public function updatePackage($request, $package): JsonResponse
    {
        $package = Package::find($package);
        $package->name = $request->name;
        $package->price = $request->price;
        $package->ticket_slots = $request->ticket_slots;
        $package->discount = $request->discount;
        $package->save();

        return response()->json([
            'message' => 'update successful',
            'data' => PackageResource::collection($package)
        ]);

    }

    public function deletePackage($package): JsonResponse
    {
        $package->delete();

        return response()->json([
            'message' => 'Package deleted successfully'
        ], 204);
    }
}
