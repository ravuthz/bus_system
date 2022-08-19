<?php

use App\Todo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(User::class, 2)->create()->each(function ($u) {
        //     $u->issues()->save(factory(App\Issues::class)->make());
        // });

        factory(Todo::class, 20)->create();
    }
}
