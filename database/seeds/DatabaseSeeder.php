<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Autos;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Model::unguard();
        $this->call('AutosSeeder');

    }

}

class AutosSeeder extends Seeder {
    public function run()
    {
        DB::table('autos')->delete();
        Autos::create(['placa' => 'XJU987', 'color' => 'rojo' ]);
        Autos::create(['placa' => 'JNM987', 'color' => 'verde' ]);
    }
}

