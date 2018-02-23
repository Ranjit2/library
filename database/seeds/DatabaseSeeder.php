<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(PublishersTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(ShelvesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);

        $this->call(BooksTableSeeder::class);
    }
}
