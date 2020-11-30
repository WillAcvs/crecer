<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\UsersImport;

class UserController extends Controller
{
    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);

        return back()->with('message', 'Importación de Usuarios Completada');
    }
}
