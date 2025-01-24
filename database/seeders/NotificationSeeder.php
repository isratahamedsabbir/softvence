<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notifications = [];
        
        for ($i = 0; $i < 50; $i++) { // Generate 10 sample notifications
            $notifications[] = [
                'id' => Str::uuid()->toString(),
                'type' => 'App\Notifications\SampleNotification',
                'notifiable_type' => 'App\Models\User', // Change this if needed
                'notifiable_id' => rand(1, 3), // Users 1, 2, 3
                'data' => json_encode([
                    'message' => 'Sample Notification ' . ($i + 1),
                    'id' => 0
                ]),
                'read_at' => rand(0, 1) ? Carbon::now() : null, // Randomly mark some notifications as read
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('notifications')->insert($notifications);
    }

}