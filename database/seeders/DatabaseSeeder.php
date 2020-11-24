<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $user = new User();
        $user->name = 'Ardi Karpson';
        $user->email = 'karpson153@gmail.com';
        $user->password = bcrypt('Passw0rd');
        $user->save();

        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(ImageSeeder::class);
    }
}
