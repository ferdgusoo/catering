<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Menu::create([
                'name' => 'Aneka Sayur',
                'package' => 'sayur kangkung, capcay, sop',
                'price' => 3000,
                'type' => 'Lauk & Sayur',
                'desc' => 'Menu sayur yang sehat dan tetap lezat',
                'image' => '1685771922.jpg',
            ]);

            \App\Models\Menu::create([
                'name' => 'Ayam Bakar Paha',
                'package' => '1pcs ayam bakar paha',
                'price' => 7000,
                'type' => 'Lauk & Sayur',
                'desc' => 'Ayam bakar bumbu spesial yang meresap sempurna sehingga menghasilkan rasa yang lezat',
                'image' => '1685771763.jpg',
            ]);

            \App\Models\Menu::create([
                'name' => 'Ayam Goreng Dada',
                'package' => '1pcs ayam goreng dada',
                'price' => 10000,
                'type' => 'Lauk & Sayur',
                'desc' => 'Ayam goreng dengan cita rasa gurih yang nikmat',
                'image' => '1685771820.jpg',
            ]);

            \App\Models\Menu::create([
                'name' => 'Paket Hemat',
                'package' => '1 pcs ayam bakar paha + sayur + nasi',
                'price' => 12000,
                'type' => 'Paket',
                'desc' => 'Paket lengkap lezat dengan harga tetap terjangkau',
                'image' => '1685771853.jpg',
            ]);

            \App\Models\Menu::create([
                'name' => 'Paket Spesial',
                'package' => '1 pcs ayam goreng dada + sayur + buah + nasi',
                'price' => 17000,
                'type' => 'Paket',
                'desc' => 'Paket ekstra lengkap dan sehat dengan rasa yang tidak mengecewakan',
                'image' => '1685771892.jpg',
            ]);
    }
}
