<?php

namespace Database\Seeders;

use App\Models\Talent as ModelsTalent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TalentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ModelsTalent::factory()->count(10)->create();
        ModelsTalent::create([
            'name'=>'yassine',
            'email'=>'yassine@2005gmail.com',
            'dateNaissance'=>'2005-06-12'
        ]);
    }
}
