<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $this->call(NewsSeeder::class);
        User::factory()->create([
            'name' => 'amin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
            'age' => 20
        ]);
        $users = User::inRandomOrder()->limit(10)->get();

        // Create appointments for each user
        foreach ($users as $user) {
            for ($i = 0; $i < 10; $i++) {
                $scheduledDate = Carbon::now()->addDays(rand(1, 30))->toDateString();
                $scheduledTime = Carbon::createFromTime(rand(8, 11), rand(0, 45))->format('H:i:s');

                $status = rand(0, 1) ? 'confirmed' : 'pending';
                Appointment::create([
                    'user_id' => $user->id,
                    'scheduled_date' => $scheduledDate,
                    'scheduled_time' => $scheduledTime,
                    'status' => $status,

                ]);
            }
        }
    }
}
