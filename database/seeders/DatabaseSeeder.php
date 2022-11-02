<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(CartTableSeeder::class);
        $this->call(DeveloperTableSeeder::class);
        $this->call(DevelopsTableSeeder::class);
        $this->call(GameTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(OwnsTableSeeder::class);
        $this->call(PaymentCardTableSeeder::class);
        $this->call(PublisherTableSeeder::class);
        $this->call(PublishesTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
