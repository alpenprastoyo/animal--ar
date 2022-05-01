<?php

namespace Database\Seeders;

use App\Models\AnimalModel;
use App\Models\AnimalPartModel;


use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animal =  AnimalModel::updateOrCreate(['name' => 'Sapi', 'folder' => 'sapi', 'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'animation' => "C4D Animation Take", 'setting_scale' => '0.07 0.07 0.07', 'setting_position' => '2 -4 -2.5' , 'image' => 'sapi.png', 'scan' => '0']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Kepala', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'sapi_part_1.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Buntut', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'sapi_part_2.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Badan', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'sapi_part_3.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'kaki', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'sapi_part_4.png']);


        $animal =  AnimalModel::updateOrCreate(['name' => 'Kucing', 'folder' => 'kucing', 'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'animation' => "Take 001", 'setting_scale' => '30 30 30', 'setting_position' => '2 -4 -2.5' , 'image' => 'kucing.png' , 'scan' => '1']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Kepala', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'kucing_part_1.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Buntut', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'kucing_part_2.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Badan', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'kucing_part_3.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'kaki', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'kucing_part_4.png']);

        $animal =  AnimalModel::updateOrCreate(['name' => 'Zebra', 'folder' => 'zebra', 'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'animation' => "All Animations_skeleton #0.002", 'setting_scale' => '5 5 5', 'setting_position' => '2 -4 -2.5' , 'image' => 'zebra.png' , 'scan' => '1' ]);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Kepala', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'zebra_part_1.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Buntut', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'zebra_part_2.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Badan', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'zebra_part_3.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'kaki', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'image' => 'zebra_part_4.png']);
    }
}
