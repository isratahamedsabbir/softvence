<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions')->insert([
            [
                "user_id" => 1,
                "trx_id" => "trx-123",
                "type" => "increment",
                "title" => "Deposit",
                "amount" => 1000,
                "status" => "success",
                "created_at" => now()->subDays(1),
            ],
            [
                "user_id" => 1,
                "trx_id" => "trx-456",
                "type" => "decrement",
                "title" => "Withdraw",
                "amount" => 1000,
                "status" => "success",
                "created_at" => now()->subDays(1),
            ],
            [
                "user_id" => 1,
                "trx_id" => "trx-789",
                "type" => "increment",
                "title" => "Deposit",
                "amount" => 2000,
                "status" => "success",
                "created_at" => now()->subDays(1),
            ],
            [
                "user_id" => 1,
                "trx_id" => "trx-1011",
                "type" => "increment",
                "title" => "Withdraw",
                "amount" => 5000,
                "status" => "success",
                "created_at" => now()->subDays(1),
            ]
        ]);
    }
}
