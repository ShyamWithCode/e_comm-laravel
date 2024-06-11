<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name'=>'earring',
                'price'=>'250',
                'description'=>'this is most earring item',
                'category'=>'earring',
                'gallery'=>"https://www.pexels.com/photo/close-up-photo-of-person-holding-earrings-1721937/"  
            ],
            [
                'name'=>'earring',
                'price'=>'1100',
                'description'=>'this is most earring item',
                'category'=>'earring',
                'gallery'=>"https://www.pexels.com/photo/earring-on-woman-ear-20594285/"
            ],
            [
                'name'=>'necklace',
                'price'=>'500',
                'description'=>'this is most necklace item',
                'category'=>'necklace',
                'gallery'=>'https://www.pexels.com/photo/woman-wearing-gold-pendant-necklace-8703414/'
            ],
            [
                'name'=>'braslet',
                'price'=>'100',
                'description'=>'this is most braslet item',
                'category'=>'braslet',
                'gallery'=>"https://www.pexels.com/photo/two-person-holding-hands-371285/"
            ],
            [
                'name'=>'ring9',
                'price'=>'500',
                'description'=>'this is most ring item',
                'category'=>'ring',
                'gallery'=>'https://www.pexels.com/photo/closeup-photography-of-clear-jeweled-gold-colored-cluster-ring-on-red-rose-1232931/'   
            ],
            [
                'name'=>'ring7',
                'price'=>'500',
                'description'=>'this is most ring item',
                'category'=>'ring',
                'gallery'=>'https://www.pexels.com/photo/closeup-photography-of-clear-jeweled-gold-colored-cluster-ring-on-red-rose-1232931/'   
            ],
            [
                'name'=>'ring6',
                'price'=>'500',
                'description'=>'this is most ring item',
                'category'=>'ring',
                'gallery'=>'https://www.pexels.com/photo/closeup-photography-of-clear-jeweled-gold-colored-cluster-ring-on-red-rose-1232931/'   
            ],
            [
                'name'=>'1ing',
                'price'=>'500',
                'description'=>'this is most ring item',
                'category'=>'ring',
                'gallery'=>'https://www.pexels.com/photo/closeup-photography-of-clear-jeweled-gold-colored-cluster-ring-on-red-rose-1232931/'   
            ],
            [
                'name'=>'ring2',
                'price'=>'500',
                'description'=>'this is most ring item',
                'category'=>'ring',
                'gallery'=>'https://www.pexels.com/photo/closeup-photography-of-clear-jeweled-gold-colored-cluster-ring-on-red-rose-1232931/'   
            ],
            [
                'name'=>'ring4',
                'price'=>'500',
                'description'=>'this is most ring item',
                'category'=>'ring',
                'gallery'=>'https://www.pexels.com/photo/closeup-photography-of-clear-jeweled-gold-colored-cluster-ring-on-red-rose-1232931/'   
            ],
            
        ]);
    }
}
