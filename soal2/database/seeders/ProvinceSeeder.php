<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Province;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::get('https://wilayah.id/api/provinces.json');

        if (! $response->successful()) {
            $this->command->error('Gagal fetch data provinsi!');
            return;
        }
        foreach ($response->json('data') as $prov) {
            Province::updateOrCreate(
                ['code' => $prov['code']],
                ['name' => $prov['name']]
            );
        }
    }
}
