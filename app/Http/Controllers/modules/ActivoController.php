<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Activo;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use App\Models\Marca;
use App\Models\TipoActivo;
use App\Models\TipoBaja;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ActivoController extends Controller
{
    public function index(){
        $activos = Activo::all();
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/activos/index',compact('activos','categorias','tipos','marcas','estados'));
    }

    public function create(){
        $activos = Activo::all();
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/activos/create',compact('activos','categorias','tipos','marcas','estados'));
    }

    public function store(Request $request){
        $activos = Activo::create($request->all());
        return redirect()->route('activo.index')->with([
            'message'=>'El activo fue creado con exito :)','type'=>'info'
        ]);
    }

    public function show($id){
        $activos = Activo::find($id);
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/activos/show',compact('activos','categorias','tipos','marcas','estados'));
    }

    public function destroy($id){
        $activos = Activo::find($id)->delete();
        return redirect()->route('activo.index')->with([
            'message'=>'El activo fue eliminado con exito :_(','type'=>'danger'
        ]);
    }

    public function edit($id){
        $activos = Activo::find($id);
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/activos/edit',compact('activos','categorias','tipos','marcas','estados'));
    }

    public function update(Request $request,$id){
        $activos = Activo::find($id)->update($request->all());
        return redirect()->route('activo.show',$id)->with([
            'message'=>'El activo fue actualizado con exito','type'=>'success'
        ]);
    }

    public function search(Request $request){
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        $tiposbaja = TipoBaja::all();


        if ($request){
            $query = $request->get('numero_serie');
            $activos = Activo::where('numero_serie', 'LIKE', '%' .$query. '%' )
            ->get();
        }

        return view('modules/bajas/create',compact('activos','categorias','tipos','marcas','estados','tiposbaja'));
    }
}
