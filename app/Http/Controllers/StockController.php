<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();

        return view('stock.index', compact('stocks'));
    }

    public function show($id)
    {
        $stock = Stock::findOrFail($id);

        return view('stock.show', compact('stock'));
    }
}
