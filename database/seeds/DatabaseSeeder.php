<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(PostTagTableSeeder::class);*/

        factory(App\Editeur::class, 40)->create();
        factory(App\Auteur::class, 40)->create();  
        factory(App\Livre::class, 80)->create(); 
        
        for ($i = 1; $i < 41; $i++) {
            $number = rand(2, 8);
            for ($j = 1; $j <= $number; $j++) {
                DB::table('auteur_livre')->insert([
                    'livre_id' => rand(1, 40),
                    'auteur_id' => $i
                ]);
            }
        }
    }
}