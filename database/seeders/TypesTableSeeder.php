<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'Elettronica']);
        Type::create(['name' => 'Spesa']);
        Type::create(['name' => 'Viaggi']);
        Type::create(['name' => 'Salute']);
        Type::create(['name' => 'Abbigliamento']);
        Type::create(['name' => 'Divertimento']);
        Type::create(['name' => 'Casa']);
        Type::create(['name' => 'Istruzione']);
        Type::create(['name' => 'Assicurazioni']);
        Type::create(['name' => 'Altro']);
    }
}
