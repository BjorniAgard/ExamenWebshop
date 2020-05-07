<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\Order;
use App\User;
use App\order_product;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::sortable()->paginate(10);
        return view('order.index', compact('orders'));
        // laat de index.blade.php zien in order mapje en stuurt orders variable naar de view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all(); // werknemers laten zien
        $companies = Company::all(); // bedrijven laten zien
        $customers = User::all(); // klanten laten zien

        return view('order.create', compact('employees', 'companies', 'customers',)); // return naar create view met variablen
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order(); // nieuwe product

        $order->date = $request->input('date'); // date
        $order->status = $request->input('status'); // status
        $order->employee_id = $request->input('employee_id'); // werknemer
        $order->company_id = $request->input('company_id'); // bedrijf
        $order->customer_id = $request->input('customer_id'); // klant
        $order->save();  // save alles

        return redirect('order'); // return naar alle bestellingen
    }

    public function createOrderProduct()
    {
        $products = Product::all(); // producten laten zien

        return view('order.createOrderProduct', compact('products')); // return naar create view met variablen
    }

    public function storeOrderProduct(Request $request)
    {
        $orderProduct = new order_product(); // nieuwe bestelling Product

        $orderProduct->order_id = $request->input('order_id'); // bestelling
        $orderProduct->product_id = $request->input('product_id'); // product
        $orderProduct->amount = $request->input('amount'); // aantal

        $orderProduct->save(); // save

        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $orders = order_product::where('order_product.order_id', '=', $id)->get();
        return view('order.show', compact('orders'));
        // laat de show.blade.php zien in order mapje en stuurt orders variable naar de view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id); // vindt bestelling id

        $employees = Employee::all(); // vindt alle werknemers
        $companies = Company::all(); // vindt alle bedrijven
        $customers = User::all(); // vindt alle klanten

        return view('order.edit', compact('order', 'employees', 'companies', 'customers')); // laat de edit.blade.php zien in order mapje en 
        // stuur de variables mee naar de view
    }

    public function editOrderProduct($id)
    {
        $order = order_product::find($id); // vindt order_product id

        $products = Product::all(); // vindt alle producten

        return view('order.editOrderProduct', compact('order', 'products')); // laat de editorderproduct.blade.php zien in order mapje en stuur variablen
    }

    public function updateOrderProduct(Request $request, $id)
    {
        order_product::find($id)->fill($request->input())->save(); // zoek id en update het met nieuwe data in de input fields
        return redirect('order'); // terug naar bestelling pagina
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Order::find($id)->fill($request->input())->save(); // zoek id en update het met nieuwe data in de input fields
        return redirect('order'); // terug naar vorige pagina
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyOrderProduct($id)
    {
        $order = order_product::find($id);

        $order->delete();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        $order->orders()->detach();

        $order->delete();

        return redirect()->back();
    }
}
