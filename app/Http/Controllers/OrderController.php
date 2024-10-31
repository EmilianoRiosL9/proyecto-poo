<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Teamwork;
use App\Models\Solicitude;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $orders = Order::paginate();

        return view('order.index', compact('orders'))
            ->with('i', ($request->input('page', 1) - 1) * $orders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener todos los teamwork
        $teamworks = Teamwork::with(['employee1', 'employee2', 'vehicle'])->get();

        // Otras variables si es necesario
        $solicitudes = Solicitude::all(); // Obtener todas las solicitudes

        return view('order.create', compact('teamworks', 'solicitudes'));
    }






    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $order = new Order();
        $order->teamwork_id = $request->teamwork_id; // Asegúrate de que este ID sea correcto
        $order->solicitude_id = $request->solicitude_id; // Asegúrate de que este ID sea correcto
        $order->save();

        return redirect()->route('orders.index')->with('success', 'Orden creada exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $order = Order::find($id);

        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $order = Order::find($id);

        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderRequest $request, Order $order): RedirectResponse
    {
        $order->update($request->validated());

        return Redirect::route('orders.index')
            ->with('success', 'Order updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Order::find($id)->delete();

        return Redirect::route('orders.index')
            ->with('success', 'Order deleted successfully');
    }
}
