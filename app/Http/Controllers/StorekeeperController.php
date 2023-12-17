<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
class StorekeeperController extends Controller
{
    public function showForm()
    {
        return view('product.form');
    }

    public function addProduct(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('product.form')->with('success', 'Product added successfully!');
    }

    public function sellProduct(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $quantitySold = $request->input('quantity_sold');
        $totalAmount = $product->price * $quantitySold;

        Sale::create([
            'product_id' => $product->id,
            'quantity_sold' => $quantitySold,
            'total_amount' => $totalAmount,
        ]);

        $product->decrement('quantity', $quantitySold);

        return redirect()->route('product.form')->with('success', 'Product sold successfully!');
    }


    
    //************************** *
    public function dashboard()
    {
        $salesToday = Sale::whereDate('created_at', Carbon::today())->sum('total_amount');
        $salesYesterday = Sale::whereDate('created_at', Carbon::yesterday())->sum('total_amount');
        $salesThisMonth = Sale::whereMonth('created_at', Carbon::now()->month)->sum('total_amount');
        $salesLastMonth = Sale::whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('total_amount');

        return view('dashboard', compact('salesToday', 'salesYesterday', 'salesThisMonth', 'salesLastMonth'));
    }

    public function salesHistory()
    {
        $sales = Sale::with('product')->latest()->get();
        return view('sales.history', compact('sales'));
    }
    
}

