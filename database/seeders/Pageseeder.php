<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class Pageseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count=0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => Str::slug($page),
                'image'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fimage.shutterstock.com%2Fimage-photo%2Fbusines-people-wearing-face-mask-260nw-1862977384.jpg&imgrefurl=https%3A%2F%2Fwww.shutterstock.com%2Ftr%2Fsearch%2Fbusines%2Bmeeting&tbnid=7NeUcG-rHCoKJM&vet=12ahUKEwjY9NbJ3bnvAhVS3hoKHaeaAgUQMygOegUIARDJAQ..i&docid=dX6ZjAdj8LwaLM&w=361&h=280&itg=1&q=busines&ved=2ahUKEwjY9NbJ3bnvAhVS3hoKHaeaAgUQMygOegUIARDJAQ',
                'content'=>'Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.
                Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.
                Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.Rast gele yazı.',
                'order'=>$count,
                'created_at' => now(),
                'updated_at' => now()

            ]);
        }
    }
}
