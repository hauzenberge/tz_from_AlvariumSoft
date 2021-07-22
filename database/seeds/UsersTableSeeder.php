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
        factory(App\User::class)->create([
            'name' => 'Admin',
            'departament_id' => 1,
            'email' => 'admin@admin.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Keren',
            'departament_id' => 1,
            'email' => 'keren@admin.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Ivan',
            'departament_id' => 2,
            'email' => 'ivan@admin.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'Ivan',
            'departament_id' => 3,
            'email' => 'video@admin.com',
        ]);

        factory(App\User::class)->create([
            'name' => 'test',
            'departament_id' => 4,
            'email' => 'test@admin.com',
        ]);
    }
}
