<?php

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
/**
* Seed the application's database.
*
* @return void
*/
public function run()
{
$this->call(TablePropinsiSeeder::class);
$this->call(TableKotaSeeder::class);
$this->call(BukuTableSeeder::class);
$this->call(PenerbitTableSeeder::class);
}
}
