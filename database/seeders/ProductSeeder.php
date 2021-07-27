<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            [
            'productcode' => '10106104010500',
            'productname' => 'IPA SE 20m3 Container',
            'producttype' => '010',
            'listorder' => '3',
            'useflag' => true,
            'regempcode' => '123',
            'regdate' => '2020/06/23  18:34:13',
            'modempcode' => '',
            'lastupdate' => '2020/06/23  18:34:13',
        ],
            [
                'productcode' => '10106104040500',
                'productname' => 'IPA USE 20m3 Container',
                'producttype' => '010',
                'listorder' => '1',
                'useflag' => true,
                'regempcode' => '123',
                'regdate' => '2020/06/23  18:34:13',
                'modempcode' => '',
                'lastupdate' => '2020/06/23  18:34:13',
            ],
            [
                'productcode' => '10106104099998',
                'productname' => 'IPA SP 20m3 Container',
                'producttype' => '010',
                'listorder' => '3',
                'useflag' => true,
                'regempcode' => '123',
                'regdate' => '2020/06/23  18:34:13',
                'modempcode' => '',
                'lastupdate' => '2020/06/23  18:34:13',
            ],
            [
                'productcode' => '10106104099999',
                'productname' => 'IPA SP 20m3 Container',
                'producttype' => '010',
                'listorder' => '3',
                'useflag' => true,
                'regempcode' => '123',
                'regdate' => '2020/06/23  18:34:13',
                'modempcode' => '',
                'lastupdate' => '2020/06/23  18:34:13',
            ]
            ]);
    }
}
