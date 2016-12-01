<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}


class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        \App\User::create([
            'first_name'    => 'Phillip',
            'last_name'     => 'Madsen',
            'email'         => 'wecodelaravel@gmail.com',
            'password'      => Hash::make('mad15696'),
            'user_type'      => 'super_admin',
            'active_status'      => 1,
        ]);
    }

}