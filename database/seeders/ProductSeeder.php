<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            [
                'name'=>'LG Modail W30',
                'price'=>'200$',
                'description'=>'A smartphon with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://z.zetamods.com/wp-content/uploads/2019/07/LG-W30-Pro-Ringtones.png'
            ],
            [
                'name'=>'Oppo Mobail A9',
                'price'=>'250$',
                'description'=>'A smartphon with 8gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://www.notebookcheck.net/fileadmin/Notebooks/News/_nc3/Screenshot_2019_09_08_at_10.51.11_AM.png'
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'350$',
                'description'=>'A smart TV with much more feature',
                'category'=>'TV',
                'gallery'=>'https://cdn.mos.cms.futurecdn.net/HXMU8TTc4DTuSm3CK7fJbE-970-80.jpg.webp'
            ],
            [
                'name'=>'Sony TV',
                'price'=>'400$',
                'description'=>'A smart tv with much more feature',
                'category'=>'TV',
                'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/7198DOeKMBL.__AC_SY300_SX300_QL70_FMwebp_.jpg'
            ],
        ]);
    }
}
