<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Administrador',
                'email' => 'admin@devlud.com.br',
                'password' => '$2y$10$yPHVS/6/RxrLQAHQPaWLgOLOm.DbJQArofAkTqbYXc8J6gluIsusq',
                'remember_token' => 'cMQWs1majIC45nYVIi8GPSAlGRisjR4ExgIUfFge1O6hmHqHGz7hqKRg0Ade',
                'created_at' => '2018-02-17 04:24:31',
                'updated_at' => '2018-02-17 04:24:31',
            ),
        ));
        
        
    }
}