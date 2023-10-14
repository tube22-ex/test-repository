<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FriendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\User::factory(50)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'hoge',
            'last_name' => 'huga',
            'age' => 1,
            'email' => 'hogehuga@example.com',
            'postal_code' => 4444,
            'address' => 1234,
            'tel' => '080-1112-1111'
        ]);
    }
}
