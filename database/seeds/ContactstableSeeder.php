<?php

use Illuminate\Database\Seeder;

class ContactstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Contact::class, 50)->create();
    }
}
