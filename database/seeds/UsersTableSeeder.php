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
        //
        App\User::create([
            'name'      => 'Webmaster',
            'email'     => 'webmaster@admin.com',
            'password'     => bcrypt('admin'),

        ]);

        factory(App\User::class, 2)->create();

    }
}
