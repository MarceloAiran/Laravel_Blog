<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name'      =>  'Marcelo Airan',
            'email'     =>  'marcelo@gmail.com',
            'password'  =>  bcrypt('123456') ,
            'admin'     => 1
        ]);

        App\Profile::create([
            'user_id'   =>  $user->id,
            'avatar'    =>  'uploads/avatars/1.png',
            'about'     =>  'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quo ducimus numquam laborum nam perspiciatis porro cupiditate dicta doloremque molestias ex soluta dolores ullam nemo voluptatem, sit debitis fugiat a.',
            'facebook'   =>  'facebook.com',
            'youtube'   =>  'youtube.com'

        ]);
    }
}
