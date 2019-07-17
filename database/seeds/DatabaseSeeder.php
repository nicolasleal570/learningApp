<?php

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

        Storage::deleteDirectory('courses'); // Eliminando el directorio courses
        Storage::deleteDirectory('users'); // Eliminando el directorio users

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'teacher']);
        factory(\App\Role::class, 1)->create(['name' => 'student']);

        factory(\App\User::class, 1)->create([ // Usuario administrador
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            'role_id' => \App\Role::ADMIN
        ])->each(function (\App\User $u) {
            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\User::class, 50)->create()->each(function (App\User $u){
            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        }); // Usuarios Estudiantes

        factory(\App\User::class, 10)->create()->each(function (App\User $u){
            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
            factory(\App\Teacher::class, 1)->create(['user_id' => $u->id]);
        }); // Usuarios Profesores

        factory(\App\Level::class, 1)->create(['name' => 'Beginner']);
        factory(\App\Level::class, 1)->create(['name' => 'Intermediate']);
        factory(\App\Level::class, 1)->create(['name' => 'Advanced']);

        factory(\App\Category::class, 5)->create();
        
        factory(\App\Course::class, 50)->create()
            ->each(function(\App\Course $c){
                $c->goals()->saveMany(factory(\App\Goal::class, 2)->create());
                $c->requirements()->saveMany(factory(\App\Requirement::class, 5)->create());
            });
        
    }
}
