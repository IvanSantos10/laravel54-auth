<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Client::class, 1)->states('pessoa_fisica')->create();
        factory(\App\Client::class, 1)->states('pessoa_juridica')->create();
    }
}
