<?php

namespace Database\Seeders;

use App\Models\Name;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class NamesListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

//    php artisan db:seed --class=NamesListSeeder

    public function run()
    {
        $file = File::exists(database_path().'/json/'.'PrenomSexeNom.json');
        if ($file){
            $json = File::get(database_path().'/json/'.'PrenomSexeNom.json');
            $json = json_decode($json, true);
            $data = [];
            foreach ($json as $item){
                $data[] = [
                    'name' => $item['name'],
                    'gender' => $item['gender'] ?? "",
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
            Name::insert($data);
        }
    }
}
