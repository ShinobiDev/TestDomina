<?php

use Illuminate\Database\Seeder;
use App\Models\Status;
class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();

        $estado = new Status;
        $estado->name = "Activo";
        $estado->save();

        $estado = new Status;
        $estado->name = "Inactivo";
        $estado->save();

        $estado = new Status;
        $estado->name = "Pendiente";
        $estado->save();

        $estado = new Status;
        $estado->name = "En progreso";
        $estado->save();

        $estado = new Status;
        $estado->name = "Completada";
        $estado->save();
    }
}
