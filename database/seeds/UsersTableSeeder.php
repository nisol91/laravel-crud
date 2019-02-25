<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

//qui sopra ci vanno tutte le classi che sotto utilizzo nei miei metodi

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    //scrivendo Faker negli argomenti della funzione, significa che lo usero chiamandolo $faker
    {
        for ($i=0; $i < 100; $i++) {

            $newFakeUser = new User;

            $newFakeUser->name = $faker->firstName;
            $newFakeUser->lastname = $faker->lastName;
            $newFakeUser->age = rand(10, 90);
            // $newFakeUser->cf = $faker->taxId();

            $newFakeUser->save();



        }

    }
}
