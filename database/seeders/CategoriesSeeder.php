<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Steel',
                'image' => '#'
            ],

            [
                'name' => 'Forging',
                'image' => '#'
            ],
            [
                'name' => 'Plastics & Packaging',
                'image' => '#'
            ],
            [
                'name' => 'Aluminum & Non Furrous',
                'image' => '#'
            ],
            [
                'name' => 'Cement & Ceramic Tiles',
                'image' => '#'
            ],
            [
                'name' => 'Casting',
                'image' => '#'
            ],
            [
                'name' => 'Foundry',
                'image' => '#'
            ],
            [
                'name' => 'Paper Industry',
                'image' => '#'
            ],

            [
                'name' => 'Heavy Engenieering Machine Tools & Fabrications',
                'image' => '#'
            ],
            [
                'name' => 'Heavy Construction Machinerys',
                'image' => '#'
            ],
            [
                'name' => 'Solar',
                'image' => '#'
            ],
            [
                'name' => 'Wind Mills ',
                'image' => '#'
            ],
            [
                'name' => 'Power Plants Turbines ',
                'image' => '#'
            ],
            [
                'name' => 'DG Heavy Mahcinerys ',
                'image' => '#'
            ],


            // [
            //     'name' => 'Weaving',
            //     'image' => 'weaving.png'
            // ],
            // [
            //     'name' => 'Cotton Spinning',
            //     'image' => 'cotton-spin.png'
            // ],
            // [
            //     'name' => 'Worsted/Wool ',
            //     'image' => 'woolen-spin.png'
            // ],
            // [
            //     'name' => 'Knitting',
            //     'image' => 'knitting.png'
            // ],
            // [
            //     'name' => 'Yarn & Fabric Woven & Knitted Dyeing, Printing & Finishing',
            //     'image' => 'printing-f.png'
            // ],
            // [
            //     'name' => 'Man Made Fiber',
            //     'image' => 'man-made.png'
            // ],
            // [
            //     'name' => 'HDPE-PP-PET Machinery',
            //     'image' => 'pp-pet.png'
            // ],
            // [
            //     'name' => 'Non Wovens',
            //     'image' => 'non-woven.png'
            // ],
            // [
            //     'name' => 'Coating',
            //     'image' => 'coating.png'
            // ],
            // [
            //     'name' => 'Embroidery',
            //     'image' => 'emb.png'
            // ],
            // [
            //     'name' => 'Narrow Fabric Looms',
            //     'image' => 'narrow.png'
            // ],
            // [
            //     'name' => 'Miscellaneous Plants & Machinerys',
            //     'image' => 'plants.png'
            // ],
            // [
            //     'name' => 'Winding',
            //     'image' => 'winding.png'
            // ],
            // [
            //     'name' => 'Open End Machines',
            //     'image' => 'open-machine.png'
            // ],
            // [
            //     'name' => 'Warping & Sizing',
            //     'image' => 'warping.png'
            // ],
            // [
            //     'name' => 'Carding',
            //     'image' => 'warping.png'
            // ],
            // [
            //     'name' => 'Ring Farmes',
            //     'image' => 'warping.png'
            // ],
            // [
            //     'name' => 'Open End Spinning',
            //     'image' => 'warping.png'
            // ],

            [
                'name' => 'Oil Refinery',
                'image' => '#'
            ],
            [
                'name' => 'Power',
                'image' => '#'
            ],
            [
                'name' => 'Material Handling',
                'image' => '#'
            ],

            [
                'name' => 'Machine Tools',
                'image' => '#'
            ],
            [
                'name' => 'Fabrication',
                'image' => '#'
            ],
            [
                'name' => 'Printing',
                'image' => '#'
            ],
            [
                'name' => 'Petrochemical',
                'image' => '#'
            ],


            [
                'name' => 'Copper & Brass',
                'image' => '#'
            ],
            [
                'name' => 'Non Ferrous',
                'image' => '#'
            ],
            [
                'name' => 'Ceramic',
                'image' => '#'
            ],
            [
                'name' => 'Construction',
                'image' => '#'
            ],
            [
                'name' => 'Oil Gas And Refineries',
                'image' => '#'
            ],

        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'title' => Str::ucfirst($category['name']),
                // 'image' => $category['image'],
                'slug' => Str::slug($category['name']),
                "created_at" => now(),
                "updated_at" => now()
            ]);
        }
        // $categories_img = Category::get();
        // foreach ($categories_img as $category) {
        //     try {
        //         File::copy(public_path('images/icons/' . $category->image), storage_path('app/public/images/latest_arrival/' . $category->image));
        //     } catch (\Throwable $th) {
        //         Log::error($th);
        //     }
        // }
    }
}
