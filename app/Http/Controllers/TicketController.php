<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\Message;
use App\Models\Ticket;
use App\Models\TicketMessage;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = __('Tickets');
        $items = Ticket::orderBy('id', 'desc')->paginate(15);

        if ($request->ajax()) {
            return response()->json($items);
        }

        return view('dashboard.ticket.index', compact('title', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = __('Adding a Ticket');

        return view('dashboard.ticket.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketRequest $request)
    {
        $ticket = Ticket::create($request->merge(['user_id' => auth()->id()])->all());

        TicketMessage::create(
            [
                'message' => $request->input('message'),
                'to_user_id' => $request->input('to_user_id') ?? env('ADMIN_ID'),
                'from_user_id' => auth()->id(),
                'ticket_id' => $ticket->id
            ]
        );
        $message = __('Object added successfully!');
        $status = 'success';

        if ($request->ajax()) {
            return response()->json(compact('status', 'message'));
        }

        return redirect()->route('faqs.index')->with(compact('status', 'message'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Ticket::findOrFail($id);

        $title = __('Editing Ticket');

        return view('dashboard.ticket.edit', compact('title', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Ticket::findOrFail($id);
        $item->fill($request->all());
        $item->save();

        return redirect()->route('faqs.index')->with([
            'status' => 'success',
            'message' => __('Data updated successfully!')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Ticket::findOrFail($id);
        $item->delete();

        return redirect()->route('faqs.index')->with([
            'status' => 'success',
            'message' => __('Object deleted successfully!')
        ]);
    }

    /**
     * Возвращает тикеты авторизованого пользователя
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCurrentUserTickets(Request $request)
    {

        $items = Ticket::where('user_id', auth()->id())
            ->orderBy('id', 'desc')
            ->paginate(15);

        return response()->json($items);
    }

    public function getTicket($id)
    {
        $item = Ticket::where('id', $id)
            ->with('message')
            ->with('message.from_user')
            ->with('message.to_user')
            ->first();

        return response()->json($item);
    }

    public function sendMessage(Request $request)
    {
        TicketMessage::create(
            [
                'message' => $request->input('message'),
                'to_user_id' => $request->input('to_user_id') ?? env('ADMIN_ID'),
                'from_user_id' => auth()->id(),
                'ticket_id' => (int)$request->input('ticket_id')
            ]
        );

        $message = __('Message sent successfully!');

        if ($request->ajax()) {
            return response()->json(compact('message'));
        }

    }
}
