<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index () {
        $types = Type::all();

        $data = [
            'result' => $types
        ];
        return response()->json($data);
    }
}
