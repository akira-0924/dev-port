<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Book Title 1',
                'author' => 'Author 1',
                'description' => 'Description for Book 1',
            ],
            [
                'title' => 'Book Title 2',
                'author' => 'Author 2',
                'description' => 'Description for Book 2',
            ],
        ]);
    }
}
