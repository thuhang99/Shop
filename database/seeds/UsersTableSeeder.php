<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adminstrator',
            'email' => 'admin@gmail.com',
            'phone' => '0123456789',
            'gender' => 1,
            'address' => 'Hà Nội',
            'avatar' => '',
            'password' => 'bcrypt(123)',
        ]);
        factory(App\Models\User::class, 49)->create();
    }
}
