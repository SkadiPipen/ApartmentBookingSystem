<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data
        Tenant::truncate();

        // Insert sample data
        Tenant::create([
            'tenant_id' => 'T1001',
            'amount' => 600.58,
            'status' => 'paid',
            'check_in_date' => '2022-01-05',
            'check_out_date' => '2023-11-05'
        ]);

        Tenant::create([
            'tenant_id' => 'T1002',
            'amount' => 750.00,
            'status' => 'overdue',
            'check_in_date' => '2022-02-15',
            'check_out_date' => '2023-10-15'
        ]);

        // Add more sample data as needed
        Tenant::factory()->count(10)->create(); // If you have a factory
    }
}
