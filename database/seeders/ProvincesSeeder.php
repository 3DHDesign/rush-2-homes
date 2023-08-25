<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['name_en' => 'Western', 'name_si' => 'බස්නාහිර', 'name_ta' => 'மேல்'],
            ['name_en' => 'Central', 'name_si' => 'මධ්‍යම', 'name_ta' => 'மத்திய'],
            ['name_en' => 'Southern', 'name_si' => 'දකුණු', 'name_ta' => 'தென்'],
            ['name_en' => 'North Western', 'name_si' => 'වයඹ', 'name_ta' => 'வட மேல்'],
            ['name_en' => 'Sabaragamuwa', 'name_si' => 'සබරගමුව', 'name_ta' => 'சபரகமுவ'],
            ['name_en' => 'Eastern', 'name_si' => 'නැගෙනහිර', 'name_ta' => 'கிழக்கு'],
            ['name_en' => 'Uva', 'name_si' => 'ඌව', 'name_ta' => 'ஊவா'],
            ['name_en' => 'North Central', 'name_si' => 'උතුරු මැද', 'name_ta' => 'வட மத்திய'],
            ['name_en' => 'Northern', 'name_si' => 'උතුරු', 'name_ta' => 'வட'],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
