<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'FlatShoes',
            'category'    => 'utlities',
            'price'    => 150000,
            'stock'    => 200,
        ];

        // Simple Queries
        $this->db->table('products')->insert($data);
        
        $data = [
            'name' => 'Heels',
            'category'    => 'utlities',
            'price'    => 200000,
            'stock'    => 150,
        ];
        // Using Query Builder
        $this->db->table('products')->insert($data);
    }
}