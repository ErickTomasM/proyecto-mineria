<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\Proveedores;

class ProveedorController extends Controller
{
    function index () {
        $proveedores = Proveedor::all();
        return view ('proveedores.index', compact('proveedores'));
    }
}
