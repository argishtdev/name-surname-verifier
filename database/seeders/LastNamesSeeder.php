<?php

namespace Database\Seeders;

use App\Models\LastName;
use App\Models\Name;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class LastNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $file = File::exists(database_path().'/json/'.'LastNames.json');
        if ($file){
            $json = File::get(database_path().'/json/'.'LastNames.json');
            $json = json_decode($json, true);
            $data = [];
            foreach ($json as $item){
                $data[] = [
                    'last_name' => $item['LastName'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
            LastName::insert($data);
        }
    }
}
