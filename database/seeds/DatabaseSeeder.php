<?php

use App\User;
use App\Model\Staff;
use App\Model\Eventcentan;
use App\Model\Roomservice;
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
       // factory(User::class,5)->create();
       factory(Roomservice::class,30)->create();
       factory(Eventcentan::class,5)->create();
       factory(Staff::class,10)->create();
    }
}
