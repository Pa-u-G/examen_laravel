<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'evento 1',
            'desc' => "no se que1",
            'date' => "2026-01-20",
        ]);
        Event::create([
            'name' => 'evento 2',
            'desc' => "no se que2",
            'date' => "2026-01-21",
        ]);
        Event::create([
            'name' => 'evento 3',
            'desc' => "no se que3",
            'date' => "2026-01-20",
        ]);
        Event::create([
            'name' => 'evento 4',
            'desc' => "no se que4",
            'date' => "2026-01-21",
        ]);
    }
}


// name',
        // 'desc',
        // 'date',
