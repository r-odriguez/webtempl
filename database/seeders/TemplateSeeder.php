<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('name', 'Admin')->first();
        for ($i = 0; $i < 30; $i++) {
            DB::table("templates")->insert([
                "title"        => "Product $i",
                "description"  => "Best Product $i out there",
                "price"        => (float) $i,
                "pricingModel" => "FREE",
                "author_id"    => $admin->id,
            ]);
        }
    }
}
