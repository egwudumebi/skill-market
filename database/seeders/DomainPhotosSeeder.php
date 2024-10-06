<?php

namespace Database\Seeders;

use App\Models\Domain;
use App\Models\DomainPhoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file_paths = [
            'domains/art-and-entertainment/',
            'domains/business/',
            'domains/education/',
            'domains/engineering/',
            'domains/finance/',
            'domains/healthcare/',
            'domains/hospitality-and-tourism/',
            'domains/law/',
            'domains/science/',
            'domains/technology/'
        ];

        // $count = 0;
        // foreach ($file_paths as $file_path) {
        //     $count++;
        //     for ($i = 0; $i <3; $i++) {
        //         $picture = $file_path . $count;
        //     }
        //     DomainPhoto::create([
        //         'name' => $domain_name,
        //         'description' => $decription,
        //         'sub_skills' => $sub_skills,
        //     ]);
        // }
    }
    
}
