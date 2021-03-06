<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => 'Neobrinoke_' . $i,
                'email' => 'neo@' . $i . '.fr',
                'password' => bcrypt('neobrinoke')
            ]);
        }
    }
}
