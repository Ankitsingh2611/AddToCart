<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'name' => 'Book1',
                'author' => 'Author Name1',
                'image' => 'book1.jpg',
                'price' => 199.99
            ],
            [
                'name' => 'Book2',
                'author' => 'Author Name2',
                'image' => 'book2.jpg',
                'price' => 299.98
            ],
            [
                'name' => 'Book3',
                'author' => 'Author Name3',
                'image' => 'book3.jpg',
                'price' => 399.01
            ]
        ];
        foreach ($books as $key => $value) {
            Book::create($value);
        }
    }
}
