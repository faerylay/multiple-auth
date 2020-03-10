<?php

use Illuminate\Database\Seeder;
use App\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Adminfaery',
               'email'=>'faerylay@gmail.com',
               'is_admin'=>'1',
               'password'=> bcrypt('mainkalay'),
            ],
            [
               'name'=>'Userfaery',
               'email'=>'user@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
