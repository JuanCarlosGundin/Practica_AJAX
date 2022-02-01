<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function leerController(Request $request){
        $datos=DB::select('select * from tbl_users where nombre like ?',['%'.$request->input('filtro').'%']);
        return response()->json($datos);
    }
    public function crearController(Request $request){
        try {
            $path=$request->file('foto')->store('uploads','public');
            DB::insert('insert into tbl_users (nombre, foto) values (?,?)',[$request->input('nombre'),$path]);
            return response()->json(array('resultado'=> 'OK'));            
        } catch (\Throwable $th) {
            return response()->json(array('resultado'=> 'NOK: '.$th->getMessage()));
        }
    }

    public function eliminarController(Request $request){
        try {
            DB::delete('delete from tbl_users where id = ?',[$request->input('id')]);
            return response()->json(array('resultado'=> 'OK'));            
        } catch (\Throwable $th) {
            return response()->json(array('resultado'=> 'NOK: '.$th->getMessage()));
        }
    }

    public function editarController(Request $request){
        try {
            $path=$request->file('foto')->store('uploads','public');
            $id=$request->input('id');
            $nombre=$request->input('nombre');
            DB::table('tbl_users')
              ->where('id', $id)
              ->update(['nombre' => $nombre,'foto' => $path]);
            return response()->json(array('resultado'=> 'OK'));            
        } catch (\Throwable $th) {
            return response()->json(array('resultado'=> 'NOK: '.$th->getMessage()));
        }
    }
}
