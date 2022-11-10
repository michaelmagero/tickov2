<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Models\Ticket;
use App\Services\TicketService;
use Illuminate\Http\JsonResponse;

class TicketController extends Controller
{

    public function index(): JsonResponse
    {
        return (new TicketService())->getTickets();
    }

    public function store(TicketRequest $request): JsonResponse
    {
        return (new TicketService())->storeTicket($request);
    }

    public function show(Ticket $ticket): JsonResponse
    {
        return (new TicketService())->showTicket($ticket);
    }

    public function update(TicketRequest $request, Ticket $ticket): JsonResponse
    {
        return (new TicketService())->updateTicket($request, $ticket);
    }

    public function destroy(Ticket $ticket): JsonResponse
    {
        return (new TicketService())->deleteTicket($ticket);
    }
}
