<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::create(
        [
         'nom' => 'lingerie de nuit',
         'photo' => ''
        ]
        );
    }
}
