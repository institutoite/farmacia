<?php

namespace Database\Seeders;

use App\Models\proveedore as ModelsProveedore;
use App\Proveedore;

use Database\Factories\ProveedorFactory;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Proveedore::create(['laboratorio'=>'COFAR','direccion'=>'tres pasos atras otra']);
        Proveedore::create(['laboratorio'=>'LAFAR','direccion'=>'tres pasos atras 2']);
        Proveedore::create(['laboratorio'=>'FIFAR','direccion'=>'tres pasos atras otra 1']);
        Proveedore::create(['laboratorio'=>'KOFAR','direccion'=>'tres pasos atras otra 2']);
        Proveedore::create(['laboratorio'=>'TIFAR','direccion'=>'tres pasos atras otra 3']);
        Proveedore::create(['laboratorio'=>'TUFAR','direccion'=>'tres pasos atras otra 4']);
        Proveedore::create(['laboratorio'=>'ZAFAR','direccion'=>'tres pasos atras otra 5']);
        Proveedore::create(['laboratorio'=>'POFAR','direccion'=>'tres pasos atras otra 6']);

        
        
    }
}
