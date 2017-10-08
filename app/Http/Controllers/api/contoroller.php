<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\products;

class contoroller extends Controller
{
    public function getIndex()
    {
        $products = products::all();
        return response()->json([
        		'products' => $products
        ]);
    }

    }
