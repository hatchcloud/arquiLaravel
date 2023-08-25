<?php

namespace Database\Seeders;

use App\Models\product_package;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product_packageSeeder extends Seeder
{
    public function run(): void
    {
        $product = new product_package();
        $product->package_name = 'Reunión de Consulta';
        $product->range = 'Gratis';
        $product->description = 'Una sesión de consulta inicial para discutir tus necesidades y objetivos arquitectónicos. ¡Estamos aquí para escucharte!';
        $product->status = 'A';
        $product->save();

        $product = new product_package();
        $product->package_name = 'Factibilidad y Concepto';
        $product->range = 'desde $5000';
        $product->description = 'Un análisis detallado de la viabilidad de tu proyecto y la creación de un concepto arquitectónico sólido.';
        $product->status = 'A';
        $product->save();

        $product = new product_package();
        $product->package_name = 'Diseño Arquitectónico';
        $product->range = 'desde $9000';
        $product->description = 'Desarrollo de un diseño arquitectónico personalizado que refleje tu visión y se integre con su entorno.';
        $product->status = 'A';
        $product->save();

        $product = new product_package();
        $product->package_name = 'Inspección en Obra';
        $product->range = 'desde $9000';
        $product->description = 'Supervisión en sitio para asegurarnos de que tu proyecto se construya de acuerdo con los planos y especificaciones.';
        $product->status = 'A';
        $product->save();
    }
}
