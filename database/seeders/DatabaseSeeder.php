<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Genre;
use App\Models\Invoice;
use App\Models\invoiceItem;
use App\Models\MediaType;
use App\Models\Playlist;
use App\Models\PlaylistTrack;
use App\Models\Track;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        Playlist::factory(100)->create();
        dump('Playlist seeding successful');
        MediaType::factory(5)->create();
        dump('MediaType seeding successful');
        Genre::factory(25)->create();
        dump('Genre seeding successful');
        Artist::factory(50)->create();
        dump('Artist seeding successful');
        Album::factory(80)->create();
        dump('Album seeding successful');
        Track::factory(100)->create();
        dump('Track seeding successful');
        for ($i=0; $i < 10; $i++) {
            Employee::factory()->create();
        }
        dump('Employee seeding successful');
        Customer::factory(50)->create();
        dump('Customers seeding successful');
        Invoice::factory(100)->create();
        dump('Invoice seeding successful');
        InvoiceItem::factory(100)->create();
        dump('Invoice Item seeding successful');
        dump('Seeding successful');
    }
}
