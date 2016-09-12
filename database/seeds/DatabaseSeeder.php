<?php

    use App\Profile;
    use App\User;
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
            // $this->call(UsersTableSeeder::class);
            factory(User::class, 50)->create();
            factory(Profile::class, 50)->create();
        }
    }
