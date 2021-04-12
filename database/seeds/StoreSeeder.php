<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Eloquent factory
        factory(Store::class)->create();
//或是下
        DB::table('stores')->insert(['name' => '師大一']);

//那如果要三筆呢
        // factory(Store::class)->create();
        // factory(Store::class)->create();
        // factory(Store::class)->create();

        // dd($user = DB::table('stores')->where('name', 'like', '%' . '師大' . '%')->get());

        // DB::table('stores')->insert([
        //     ['email' => 'taylor@example.com', 'votes' => 0],
        //     ['email' => 'dayle@example.com', 'votes' => 0],
        // ]);

        // DB::table('users')->insertOrIgnore([
        //     ['id' => 1, 'email' => 'taylor@example.com'],
        //     ['id' => 2, 'email' => 'dayle@example.com'],
        // ]);
    }
}
