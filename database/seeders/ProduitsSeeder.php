<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Produits;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produits::create(
            [
             'nom' => 'carte 3',
             'photo' => 'gel.jpg',
             'description' => 'le premier gel orgasmique qui decuple coinjointement les plaisirs des partenaires.
              Notre elixir de couple s invite au coeur de votre intimite pour vous offrir des orgasmes simultanes a partager a deux ',
              'prix' => 10000,
              'quantite' => 99,
              'statut' => 'active',
              'taille' => 'none',
              'is_solde' => false,
              'remise' => 100,
              'category_id' => Category::find(3)->id
            ]
            );
    }
}
