<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Http\Request;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $padre = User::where('nombre',$row[0])
                           ->where('apellidoPaterno',$row[1])
                           ->where('apellidoMaterno',$row[2])
                           ->first();
                    if(!empty($padre)){ 
         $request = new Request;
         $request->idPatrocinador =$padre->id;
         $request->email=$row[6];
         $request->curp=$row[8];
         $request->telefono=$row[7];
         $request->nombre= $row[3];
         $request->apepaterno =  $row[4];
         $request->apematerno =  $row[5];
        
         app(\App\Http\Controllers\genericController::class)->crearUsuarios($request);
    }
}
  
}
