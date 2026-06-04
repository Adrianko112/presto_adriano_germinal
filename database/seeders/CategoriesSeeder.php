<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
   public $categories = [
        'Elettronica',
        'Abbigliamento',
        'Casa e Arredamento',
        'Libri',
        'Giocattoli',
        'Sport e Tempo Libero',
        'Salute e Bellezza',
        'Automobili e Moto',
        'Cibo e Bevande',
       
    ];
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
