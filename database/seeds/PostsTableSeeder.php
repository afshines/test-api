<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = array(
            array('title'=>'CHANEL','img'=>'/images/chanel.jpg'),
            array('title'=>'GUCCI','img'=>'/images/gucci.jpg'),
            array('title'=>'PRADA','img'=>'/images/parada.jpg'),
            array('title'=>'BURBERRY','img'=>'/images/burberry.jpg'),
            array('title'=>'Diro','img'=>'/images/diro.jpg'),
            array('title'=>'GIORGIO ARMANI','img'=>'/images/ga.jpg'),
            array('title'=>'HERMES','img'=>'/images/hermes.jpg'),
            array('title'=>'FENDI','img'=>'/images/fendi.jpg'),
            array('title'=>'LOUIS VUITTON','img'=>'/images/lv.jpg'),
        );

        foreach ($items as $i)
        {
            DB::table('posts')->insert([
                'title' =>  $i['title'],
                'img' => $i['img']
            ]);
        }

    }
}
