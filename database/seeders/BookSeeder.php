<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'The Vegetarian',
            'writer' => 'Han Kang',
            'point' => 10,
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51Ga5GuElyL._AC_SX184_.jpg'
        ]);
        Book::create([
            'title' => 'The White Book',
            'writer' => 'Han Kang',
            'point' => 9,
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51Ga5GuElyL._AC_SX184_.jpg'
        ]);
        Book::create([
            'title' => 'Cursed Bunny',
            'writer' => 'Bora Chung',
            'point' => 8,
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/51Ga5GuElyL._AC_SX184_.jpg'
        ]);
    }
}
