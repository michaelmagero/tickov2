<?php
declare(strict_types=1);

namespace App\Services;

use App\Http\Resources\TicketResource;
use App\Models\Ticket;
use Illuminate\Http\JsonResponse;

class TicketService
{

    public function getTickets(): JsonResponse
    {
        return response()->json([
            'data' => TicketResource::collection(Ticket::paginate(10))
        ], 204);
    }

    public function storeTicket($request): JsonResponse
    {
        $ticket = new Ticket();
        $ticket->post_id = $request->post_id;
        $ticket->batch_no = $request->batch_no;
        $ticket->quantity = $request->quantity;
        $ticket->status = $request->status;
        $ticket->discount = $request->discount;
        $ticket->ticket_categories = $request->ticket_categories;
        $ticket->save();

        return response()->json([
            'message' => 'Ticket Stored Successful',
            'data' => TicketResource::collection($ticket)
        ], 201);
    }

    public function showTicket($ticket): JsonResponse
    {
        return response()->json([
            'data' => TicketResource::collection(Ticket::find($ticket))
        ]);
    }

    public function updateTicket($request, $ticket): JsonResponse
    {
        $ticket = Ticket::find($ticket);
        $ticket->post_id = $request->post_id;
        $ticket->batch_no = $request->batch_no;
        $ticket->quantity = $request->quantity;
        $ticket->status = $request->status;
        $ticket->discount = $request->discount;
        $ticket->ticket_categories = $request->ticket_categories;
        $ticket->save();

        return response()->json([
            'message' => 'Update Successful',
            'data' => TicketResource::collection($ticket)
        ]);
    }

    public function deleteTicket($ticket): JsonResponse
    {
        $ticket->delete();

        return response()->json([
            'message' => 'Ticket Deleted Successfully'
        ], 204);
    }
}
