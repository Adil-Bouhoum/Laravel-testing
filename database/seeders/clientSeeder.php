<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class clientSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
 {
 \App\Models\Client::factory(10)->create();
 }
}

