<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Carbon\Carbon;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Transaction::create([
            'amount_of_money' =>'1000000',
            'surplus' => '1000000',
            'description'=>'Giao dịch nạp tiên',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
         
        ]);
    }
}
