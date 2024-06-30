<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'full_name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Job::factory(15)->create();

        $industries = [
            'Technology',
            'Healthcare',
            'Finance',
            'Education',
            'Construction',
            'Retail',
            'Hospitality',
            'Transportation',
            'Manufacturing',
            'Real Estate'
        ];

        foreach ($industries as $industry) {
            Tag::create(['name' => $industry]);
        }
    }
}
