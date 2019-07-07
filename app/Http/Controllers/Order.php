<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class Order extends Controller
{
    //Llamando nombre
    function index()
    {
    	return Orders::all('customer_name');
    }
}