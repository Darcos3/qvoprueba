<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin QVO',
            'email'  => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('NC2022'),
            'remember_token' => Str::random(10),
            'tipo_usuario' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Daniel Arcos',
            'email'  => 'danielarcos@gmail.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('NC2022'),
            'remember_token' => Str::random(10),
            'tipo_usuario' => '2',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
