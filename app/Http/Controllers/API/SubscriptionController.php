<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriptionRequest;
use App\Models\Subscription;
use App\Services\PaymentService;
use App\Services\SubscriptionService;
use Illuminate\Http\JsonResponse;

class SubscriptionController extends Controller
{

    public function checkout()
    {
        return (new PaymentService())->initiateWebPayment();
    }

    public function index(): JsonResponse
    {
        return (new SubscriptionService())->getSubscription();
    }

    public function store(SubscriptionRequest $request): JsonResponse
    {
        return (new SubscriptionService())->storeSubscription($request);
    }

    public function show(Subscription $subscription): JsonResponse
    {
        return (new SubscriptionService())->showSubscription($subscription);
    }

    public function update(SubscriptionRequest $request, Subscription $subscription): JsonResponse
    {
        return (new SubscriptionService())->updateSubscription($request, $subscription);
    }

    public function destroy(Subscription $subscription): JsonResponse
    {
        return (new SubscriptionService())->deleteSubscription($subscription);
    }
}
