<?php

use Illuminate\Database\Seeder;

class productSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\products([
            'imagePath'=> '\public\images\banner1.jpg',
            'title'=> 'American Guitar',
            'description'=>'Nothing to describe ',
            'price'=> 5000       ]);
        $product->save();
        $product = new \App\products([
            'imagePath'=> '\public\images\banner2.jpg',
            'title'=> 'Uk Guitar',
            'description'=>'it"s Awesome like nothing else! ',
            'price'=> 6500        ]);
        $product->save();
        $product = new \App\products([
        'imagePath'=> '\public\images\banner3.jpg',
        'title'=> 'Swedish Guitar',
        'description'=>'Pic Says it all ',
        'price'=> 3500        ]);
        $product->save();
        $product = new \App\products([
        'imagePath'=> '\public\images\banner1.jpg',
        'title'=> 'Irish Bash',
        'description'=>'Something to say !! Umhhh  ',
        'price'=> 35000        ]);
        $product->save();
        $product = new \App\products([
        'imagePath'=> '\public\images\banner2.jpg',
        'title'=> 'Spainish little boy',
        'description'=>'its just a childish thing that occur the hell fun ',
        'price'=> 32000        ]);
        $product->save();
        $product = new \App\products([
        'imagePath'=> '\public\images\banner3.jpg',
        'title'=> 'norway Blast',
        'description'=>'its just a childish thing from the north!',
        'price'=> 20,000        ]);
        $product->save();

    }
}
