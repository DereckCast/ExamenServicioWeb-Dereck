<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create(['nombre' => 'Laptop', 'precio' => 1200.00, 'stock' => 10]);
        Producto::create(['nombre' => 'Mouse', 'precio' => 25.50, 'stock' => 50]);
        Producto::create(['nombre' => 'Teclado', 'precio' => 45.00, 'stock' => 30]);
    }
}
