<?php

use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
       DB::table('categories')->insert([
               'name' => 'Baju' 
        ]);   
        
      DB::table('categories')->insert([
        'name' => 'Handphone' 
        ]);  

     DB::table('categories')->insert([
       'name' => 'Celana' 
        ]);    
    }
}
