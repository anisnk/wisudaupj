<?php

use App\TamuUndangan;
use Illuminate\Database\Seeder;

class TamuUndanganSeeder extends Seeder
{
    /**\
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TamuUndangan::class, 5)->create();
    }
}
