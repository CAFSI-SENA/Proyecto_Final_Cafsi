<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Activo;
use App\Models\Baja;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use App\Models\Marca;
use App\Models\TipoActivo;
use App\Models\TipoBaja;
use Illuminate\Http\Request;

class BajaController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-bajas-create',
        'show' => 'admin-bajas-show',
        'edit' => 'admin-bajas-edit',
        'delete' => 'admin-bajas-delete',
    ];

    public function index(){
        $bajas = Baja::all();
        $activos = Activo::all();
        $tiposbaja = TipoBaja::all();
        return view('modules/bajas/index',compact('bajas','activos','tiposbaja'));
    }

    public function search(){

    }

    public function create(){

     //   if ($request){
     //       $query = $request->get('numero_serie');
     //       $activos = Activo::where('numero_serie', 'LIKE', '%' .$query. '%' )
     //           ->get();
     //   }

        $activos = [];
        //$serie = @$_GET['numero_serie'];

        if (@$_GET['numero_serie']) {
            //$activo = Activo::where('numero_serie',$_GET['numero_serie'])->first();
            $activos = Activo::join('categorias_activo','categorias_activo.id','=','categoria_id')
                ->join('tipos_activo','tipos_activo.id','=','activos.tipo_activo_id')
                ->join('marcas','marcas.id','=','activos.marca_id')
                ->select('activos.id','activos.numero_serie','categorias_activo.categoria','tipos_activo.tipo','activos.tipo_activo_id','marcas.marca','activos.modelo')
                ->where('activos.numero_serie', $_GET['numero_serie'])
                ->first();
        }
        /*if ($_GET['numero_serie']){
            $activos = Activo::where('activos.numero_serie', $_GET['numero_serie'])->firts
        }*/
        $bajas = Baja::all();
        $tiposbaja = TipoBaja::all();

        return view('modules/bajas/create',compact('bajas','activos','tiposbaja'));
    }

    public function store(Request $request){
        $request->validate([
            'fecha_baja' => 'required',
            'observacion' => 'required|max:100',
            'activo_id' => 'required',
            'tipo_baja_id' => 'required',
            'usuario_id' => 'required',
        ]);
        $bajas = Baja::create($request->all());
        return redirect()->route('baja.index',compact('bajas'));
    }

    public function show($id){
        $bajas = Baja::find($id);
        $tipos_baja = TipoBaja::all();
        $activos = Activo::all();
        return view('modules/bajas/show',compact('bajas','tipos_baja','activos'));
    }

    public function destroy($id){
        $bajas = Baja::find($id)->delete();
        return redirect()->route('baja.index')->with([
            'message'=>'La baja fue eliminada con exito',
            'type'=>'danger'
        ]);
    }

    public function edit($id){
        $bajas = Baja::find($id);
        $activos = Activo::all();
        $tipos = TipoBaja::all();
        return view('modules/bajas/edit',compact('bajas','activos','tipos'));
    }

    public function update(Request $request,$id){
        $bajas = Baja::find($id)->update($request->all());
        return redirect()->route('bajas.show',compact('bajas'));
    }
}
