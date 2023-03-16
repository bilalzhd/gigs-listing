<?php

namespace Database\Seeders;

use App\Models\Listing;
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
        \App\Models\User::factory(10)->create();
        // Listing::create([
        //     'title' => "Full Stack Developer",
        //     'email' => "abc@gmail.com",
        //     'tags' => "Laravel, JavaScript",
        //     'company' => "Devs",
        //     'location' => "Fsd",
        //     'website' => "www.abc.com",
        //     'description' => " Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis pariatur quibusdam reiciendis nobis eos fuga inventore aliquam unde? Cum labore delectus possimus consequuntur excepturi non repellat veniam necessitatibus? Amet, dolor?",
        // ]);
        Listing::factory(6)->create();
    }
}
