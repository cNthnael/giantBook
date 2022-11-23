<?php

namespace Database\Seeders;

use App\Models\Publishers;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publishers::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Gramedia Pustaka Utama",
                    "address" => "JL Panjang, No. 8 a, Kebon Jeruk, Kebon Jeruk, 11530, RT.6/RW.11, Kb. Jeruk, Jakarta Barat, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11520",
                    "phone" => "(021) 5330150",
                    "email" => "fiksi@gramediapublishers.com/nonfiksi@gramediapublishers.com",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 2,
                    "name" => "Elex Media Komputindo",
                    "address" => "Gedung Kompas-Gramedia Lantai 2, Jl. Palmerah Barat No. 29 - 32, Gelora, Tanah Abang, Jl. Palmerah Barat No.29 - 32, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270",
                    "phone" => "(021) 53650110",
                    "email" => "redaksi@elex.media",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 3,
                    "name" => "Mizan Pustaka",
                    "address" => "Jl. Cinambo No.135, Cisaranten Wetan, Kec. Cinambo, Kota Bandung, Jawa Barat 40293",
                    "phone" => "(022) 7834310",
                    "email" => "mizanmu@bdg.centrin.net.id",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 4,
                    "name" => "Benteng Pustaka",
                    "address" => "Jl. Pesanggrahan No.8 RT/RW : 04/36, Sanggrahan, Wedomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584",
                    "phone" => "(0274) 7370635",
                    "email" => "redaksi@bentangpustaka.com",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]
        );
    }
}
