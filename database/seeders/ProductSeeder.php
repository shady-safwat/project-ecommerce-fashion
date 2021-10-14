<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredwomen1.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredwomen2.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '150',
            'sale' => '20',
            'status' => 'actived',
            'image' => 'Featuredwomen3.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredwomen4.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '120',
            'sale' => '20',
            'status' => 'actived',
            'image' => 'Featuredwomen5.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredwomen6.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredwomen7.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Women',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredwomen8.jpg',
            'category_id' => '1',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredmen1.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredmen2.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '150',
            'sale' => '20',
            'status' => 'actived',
            'image' => 'Featuredmen3.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredmen4.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '120',
            'sale' => '20',
            'status' => 'actived',
            'image' => 'Featuredmen5.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredmen6.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredmen7.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Men',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredmen8.jpg',
            'category_id' => '2',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredkids1.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredkids2.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '150',
            'sale' => '20',
            'status' => 'actived',
            'image' => 'Featuredkids3.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredkids4.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '120',
            'sale' => '20',
            'status' => 'actived',
            'image' => 'Featuredkids5.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '150',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredkids6.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredkids7.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);

        DB::table('products')->insert([
            'name' => 'Featured Items',
            'description' => 'Featured Items For Kids',
            'price' => '120',
            'sale' => '0',
            'status' => 'actived',
            'image' => 'Featuredkids8.jpg',
            'category_id' => '3',
            'role_id' => rand(1,2)
        ]);
    }
}
