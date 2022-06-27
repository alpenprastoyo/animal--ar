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
        $animal =  AnimalModel::updateOrCreate(['name' => 'Burung', 'folder' => 'burung', 'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'animation' => "Take 001", 'setting_scale' => '2.5 2.5 2.5', 'setting_position' => '0 -4 -2.5' , 'image' => 'burung.png', 'scan' => '1']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Paruh', 'description' => 'Paruh burung berfungsi untuk mengambil makanan. Paruh burung sesuai dengan jenis makanannya', 'image' => 'burung_part_1_paruh.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Sayap', 'description' => 'Sayap burung berfungsi untuk bergerak (terbang). Burung terbang dengan cara mengepakkan sayapnya.', 'image' => 'burung_part_2_sayap.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Ekor', 'description' => 'Ekor burung berfungsi menjaga keseimbangan burung saat terbang.', 'image' => 'burung_part_3_ekor.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Cakar', 'description' => 'Cakar burung berfungsi untuk mencengkeram mangsanya (burung elang) dan untuk bertengger di dahan pohoh (burung pipit).', 'image' => 'burung_part_4_cakar.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Mata', 'description' => 'Mata burung berfungsi untuk melihat benda-benda di sekitarnya.', 'image' => 'burung_part_5_mata.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Bulu', 'description' => 'bulu burung berfungsi untuk menutupi tubuhnya dari udara di sekitarnya. Bulu melindungi burung dari hawa dingin dan hujan.', 'image' => 'burung_part_6_bulu.png']);


        $animal =  AnimalModel::updateOrCreate(['name' => 'Kucing', 'folder' => 'kucing', 'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'animation' => "Take 001", 'setting_scale' => '30 30 30', 'setting_position' => '2 -4 -2.5' , 'image' => 'kucing.png' , 'scan' => '1']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Mata', 'description' => 'Mata kucing berfungsi untuk melihat sama seperti hewan yang lainnya. Mata kucing dapat menyala di tempat yang gelap.', 'image' => 'kucing_part_1_mata.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Hidung', 'description' => 'Hidung kucing berfungsi sebagai indera penciuman.', 'image' => 'kucing_part_2_hidung.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Mulut', 'description' => 'Mulut pada kucing berfungsi untuk memasukan makanan ke dalam tubuh.', 'image' => 'kucing_part_3_mulut.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Bulu', 'description' => 'Bulu kucing berfungsi menjaga tubuh agar tetap hangat.', 'image' => 'kucing_part_4_bulu.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'kaki', 'description' => 'Kaki kucing berguna untuk bergerak (berjalan) pada ujung kaki kucing terdapat cakar yang berguna untuk menangkap mangsa.', 'image' => 'kucing_part_5_kaki.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Ekor', 'description' => 'Ekor kucing berguna untuk keseimbangan saat bergerak.', 'image' => 'kucing_part_6_ekor.png']);

        $animal =  AnimalModel::updateOrCreate(['name' => 'Gajah', 'folder' => 'gajah', 'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 'animation' => "CINEMA_4D_Principal", 'setting_scale' => '0.1 0.1 0.1', 'setting_position' => '-2.5 -2 -2.5' , 'image' => 'zebra.png' , 'scan' => '1' ]);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Belalai', 'description' => 'Belalai digunakan mengambil makanan dan minuman (air) .', 'image' => 'gajah_part_1_belalai.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Telinga', 'description' => 'Telinga yang lebar digunakan untuk mendengar dan untuk mengusir lalat / serangga yang ada di badannya dengan cara di kibas-kibaskan.', 'image' => 'gajah_part_2_telinga.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Kaki', 'description' => 'Kaki berfungsi untuk berjalan .', 'image' => 'gajah_part_3_kaki.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Mata', 'description' => 'Mata berfungsi untuk melihat.', 'image' => 'gajah_part_4_mata.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Ekor', 'description' => 'Ekor berfungsi untuk kurang lebih sama seperti fungsi telinga.', 'image' => 'gajah_part_5_ekor.png']);

        AnimalPartModel::updateOrCreate(['id_animal' => $animal->id, 'name' => 'Gading', 'description' => 'Taring berfungsi untuk untuk senjata.', 'image' => 'gajah_part_6_gading.png']);
    }
}
