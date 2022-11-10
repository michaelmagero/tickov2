<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Services\PackageService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function index(): JsonResponse
    {
        return (new PackageService())->getPackages();
    }

    public function store(Request $request): JsonResponse
    {
        return (new PackageService())->storePackage($request);
    }

    public function show(Package $package): JsonResponse
    {
        return (new PackageService())->showPackage($package);
    }

    public function update(Request $request, Package $package): JsonResponse
    {
        return (new PackageService())->updatePackage($request, $package);
    }

    public function destroy(Package $package): JsonResponse
    {
        return (new PackageService())->deletePackage($package);
    }
}
