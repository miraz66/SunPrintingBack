<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Group',
        //     'location' => 'Buston University',
        //     'email' => 'test@example.com',
        //     'website' => 'http://www.example.com',
        //     'description' => 'lorem Ipsum description of the website and documentation is provided at http://www.example.com and may not be modified or modified accordingly if required by applicable law or agreed to in writing.',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel FullStack Developer',
        //     'tags' => 'laravel, javascript, api',
        //     'company' => 'Navana Group',
        //     'location' => 'Khulna, Bangladesh',
        //     'email' => 'test@example.com',
        //     'website' => 'http://www.example.com',
        //     'description' => 'lorem Ipsum description of the website and documentation is provided at http://www.example.com and may not be modified or modified accordingly if required by applicable law or agreed to in writing.',
        // ]);
        
        // Listing::create([
        //     'title' => 'FrontEnd Developer',
        //     'tags' => 'laravel, javascript, React, and others',
        //     'company' => 'Dhaka Group',
        //     'location' => 'Dhaka University',
        //     'email' => 'test@example.com',
        //     'website' => 'http://www.example.com',
        //     'description' => 'lorem Ipsum description of the website and documentation is provided at http://www.example.com and may not be modified or modified accordingly if required by applicable law or agreed to in writing.',
        // ]);
    }
}
