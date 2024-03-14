<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Type;

// Helpers
use Illuminate\Support\Facades\Schema;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Type::truncate();
        });

        $types = [
            'HTML',
            'CSS',
            'JavaScript',
            'Vue',
            'SQL',
            'PHP',
            'Laravel'
        ];

        foreach ($types as $type) {
            $type = Type::create([
                'title' => $type,
                'slug' => str()->slug($type),
            ]);
        }
    }
}