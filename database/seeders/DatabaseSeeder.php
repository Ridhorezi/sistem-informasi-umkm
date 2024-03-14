<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Usaha;
use App\Models\Pemilik;
use App\Models\Role;
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
        // call business type seeder
        $this->call([
            BusinessTypeSeeder::class,
        ]);

         // call Owners Jobs seeder
         $this->call([
            OwnersJobsSeeder::class,
        ]);

        // create role 'admin'
        $adminRole = Role::create(['name' => 'admin']);

        // create role 'pimpinan'
        $pimpinanRole = Role::create(['name' => 'pimpinan']);

        // create user role 'admin'
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'adminrbc@gmail.com',
            'password' => '$2a$10$T.KIImd8JsLW2tKQTyDdTOrOOvQrk0LsuOfdmBFmDDWG9zP6Z9JCW',
            'role_id' => $adminRole->id,
        ]);

        // create user role 'pimpinan'
        User::factory()->create([
            'name' => 'Pimpinan',
            'email' => 'pimpinanrbc@gmail.com',
            'password' => '$2a$10$T.KIImd8JsLW2tKQTyDdTOrOOvQrk0LsuOfdmBFmDDWG9zP6Z9JCW',
            'role_id' => $pimpinanRole->id,
        ]);
    }
}