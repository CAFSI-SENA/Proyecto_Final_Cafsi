<?php

namespace Database\Seeders;

use App\Models\Activo;
use App\Models\Area;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use App\Models\Funcionario;
use App\Models\Genero;
use App\Models\Marca;
use App\Models\TipoActivo;
use App\Models\TipoAsignacion;
use App\Models\TipoBaja;
use App\Models\TipoIdentificacion;
use Illuminate\Database\Seeder;

class CargueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create([
            'estado' => 'ACTIVO'
        ]);
        Estado::create([
            'estado' => 'INACTIVO'
        ]);
        Estado::create([
            'estado' => 'BUENO'
        ]);
        Estado::create([
            'estado' => 'MAL ESTADO'
        ]);
        Estado::create([
            'estado' => 'PRESTAMO'
        ]);
        Estado::create([
            'estado' => 'BAJA'
        ]);
        Estado::create([
            'estado' => 'DISPONIBLE'
        ]);

        Area::create([
            'area' => 'CONTABILIDAD',
            'estado_id' => '1',
        ]);
        Area::create([
            'area' => 'URGENCIAS',
            'estado_id' => '1',
        ]);
        Area::create([
            'area' => 'ADMINISTRACIÓN',
            'estado_id' => '1',
        ]);
        Area::create([
            'area' => 'NEONATAL',
            'estado_id' => '1',
        ]);

        CategoriaActivo::create([
            'categoria' => 'COMPUTO',
            'estado_id' => '1',
        ]);
        CategoriaActivo::create([
            'categoria' => 'AUDIOVISUAL',
            'estado_id' => '1',
        ]);

        Genero::create([
            'genero' => 'MASCULINO',
        ]);
        Genero::create([
            'genero' => 'FEMENINO',
        ]);
        Genero::create([
            'genero' => 'OTRO',
        ]);

        Marca::create([
            'marca' => 'HP',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'SAMSUNG',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'LENOVO',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'DELL',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'ASUS',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'APPLE',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'ACER',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'TOSHIBA',
            'estado_id' => '1',
        ]);
        Marca::create([
            'marca' => 'EPSON',
            'estado_id' => '1',
        ]);

        TipoActivo::create([
            'tipo' => 'ESCRITORIO',
            'estado_id' => '1',
        ]);
        TipoActivo::create([
            'tipo' => 'PORTATIL',
            'estado_id' => '1',
        ]);
        TipoActivo::create([
            'tipo' => 'VIDEOBEAM',
            'estado_id' => '1',
        ]);
        TipoActivo::create([
            'tipo' => 'SONIDO',
            'estado_id' => '1',
        ]);

        TipoAsignacion::create([
            'tipo' => 'ASIGNACIÓN',
        ]);
        TipoAsignacion::create([
            'tipo' => 'PRESTAMO',
        ]);

        TipoBaja::create([
            'tipo' => 'MAL ESTADO',
            'estado_id' => '1',
        ]);
        TipoBaja::create([
            'tipo' => 'PERDIDA',
            'estado_id' => '1',
        ]);

        TipoIdentificacion::create([
            'tipo' => 'TARJETA DE IDENTIDAD',
            'sigla' => 'TI',
        ]);
        TipoIdentificacion::create([
            'tipo' => 'CÉDULA DE CIUDADANÍA',
            'sigla' => 'CC',
        ]);
        TipoIdentificacion::create([
            'tipo' => 'CÉDULA DE EXTRANJERÍA',
            'sigla' => 'CE',
        ]);
        TipoIdentificacion::create([
            'tipo' => 'PASAPORTE',
            'sigla' => 'PA',
        ]);

        Activo::create([
            'numero_serie' => 'ASDFG12345',
            'modelo' => 'PAVILON',
            'fecha_adquisicion' => '2020/12/31',
            'categoria_id' => '2',
            'tipo_activo_id' => '3',
            'marca_id' => '1',
            'estado_id' => '1',
        ]);
        Activo::create([
            'numero_serie' => 'ZXCVB12345',
            'modelo' => 'G4',
            'fecha_adquisicion' => '2020/10/15',
            'categoria_id' => '2',
            'tipo_activo_id' => '4',
            'marca_id' => '2',
            'estado_id' => '1',
        ]);
        Activo::create([
            'numero_serie' => 'QWERT12345',
            'modelo' => 'INSPIRON',
            'fecha_adquisicion' => '2020/01/20',
            'categoria_id' => '2',
            'tipo_activo_id' => '3',
            'marca_id' => '5',
            'estado_id' => '1',
        ]);

        Funcionario::create([
            'nombres' => 'DEIVY',
            'apellidos' => 'RODRÍGUEZ ORTEGA',
            'identificacion' => '123456789',
            'telefono' => '5432187',
            'celular' => '3117653421',
            'tipo_identificacion_id' => '2',
            'genero_id' => '1',
            'area_id' => '1',
            'estado_id' => '1',
        ]);
        Funcionario::create([
            'nombres' => 'CARLOS ANDRES',
            'apellidos' => 'RAMIREZ LOPEZ',
            'identificacion' => '987654321',
            'telefono' => '3249854',
            'celular' => '3207654329',
            'tipo_identificacion_id' => '2',
            'genero_id' => '1',
            'area_id' => '3',
            'estado_id' => '1',
        ]);
        Funcionario::create([
            'nombres' => 'MICHAEL',
            'apellidos' => 'DUQUE',
            'identificacion' => '123456789',
            'telefono' => '4328754',
            'celular' => '3134560921',
            'tipo_identificacion_id' => '2',
            'genero_id' => '1',
            'area_id' => '2',
            'estado_id' => '1',
        ]);
    }
}
