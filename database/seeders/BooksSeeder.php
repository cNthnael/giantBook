<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Books::query()->insert(

            [
                [
                    "id" => 1,
                    "publishers_id" => 1,
                    "title" => "Kekasih Musim Gugur",
                    "author" => "Laksmi Pamuntjak",
                    "year" => "2020",
                    "synopsis" => "Setelah bertahun-tahun mengembara di pelbagai kota di dunia London, New York, Madrid Siri memutuskan hidup di Berlin untuk menghindar dari masa lalu keluarganya. Tak disangka, sebuah berita mengejutkan memaksanya pulang ke Jakarta. Di tanah air, Siri harus menghadapi realita keluarganya yang pedih, ditambah dengan jalin-kelindan kompleks antara seni rupa, politik, dan sejarah, terutama ketika salah satu pamerannya dihujat dan dilarang karena dianggap melanggar susila. Dalam pergulatannya, Siri harus memaknai ulang hubungan dengan ibunya, Amba; dengan mantan sahabatnya, Dara; dengan anak tirinya, Amalia; dan dengan sejarah bapak kandungnya yang kelam.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/116260_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 2,
                    "publishers_id" => 1,
                    "title" => "Kecamuk Darah (Troubled Blood)",
                    "author" => "Robert Galbraith",
                    "year" => "2021",
                    "synopsis" => "Detektif Partikelir Cormoran Strike sedang mengunjungi kerabatnya di Cornwall saat seorang wanita menghampiri dan meminta Strike menemukan ibunya, Margot Bamborough, yang lenyap tanpa jejak pada 1974. Strike belum pernah menangani kasus lama, terlebih yang sudah berusia empat puluh tahun. Kendati kecil kemungkinan misteri itu akan terpecahkan, rasa ingin tahu Strike terusik, dan dia menerima pekerjaan tersebut---menambah jumlah kasus yang dia tangani bersama Robin Ellacott, partner di biro detektifnya. Robin sendiri sedang terlibat proses perceraian yang sengit, sembari sibuk menampik perhatian pria yang tak diinginkan dan berupaya menyangkal perasaan-perasaannya terhadap Strike. Selama menyelidiki hilangnya Margot Bamborough, Strike dan Robin berhadapan dengan perkara rumit yang melibatkan kartu tarot, pembunuh berantai psikopat, serta saksi-saksi yang tak dapat dipercaya. Selain itu, mereka juga mendapati bahwa kasus yang sudah empat puluh tahun berlalu pun masih dapat mengancam nyawa.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/118700_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 3,
                    "publishers_id" => 2,
                    "title" => "The Devil All the Time",
                    "author" => "Donald Ray Pollock",
                    "year" => "2022",
                    "synopsis" => "Willard Russel, mantan tentara saksi kekejaman perang, sudah menumpahkan banyak darah tapi tak sanggup menyelamatkan istrinya dari kematian. Carl dan Sandy Henderson, pasangan pembunuh berantai yang setiap musim panas mengincar para korbannya di jalanan. Roy dan Theodore, pengkhotbah keliling yang melarikan diri dan dijadikan buronan. Di dunia mereka yang menggila, sesosok pemuda terjebak di tengahnya, dipaksa untuk mengerti bahwa kebaikan dan kejahatan sesungguhnya memiliki batas yang fana.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/118965_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 4,
                    "publishers_id" => 2,
                    "title" => "Teman",
                    "author" => "Jounatan & Guntur Alam",
                    "year" => "2020",
                    "synopsis" => "Konon, tiga puluh tahun lalu, terjadi pembunuhan di sekolah Jounatan. Namun peristiwa itu ditutupi pihak sekolah. Tak banyak yang tahu, termasuk murid-murid di sana. Lalu, tiba-tiba seorang anak kelas sepuluh mengungkap cerita terlarang itu kepada Jou. Katanya, arwah korban yang terbunuh itu akan menuntut balas. Jou tak menggubrisnya. Namun kesurupan massal terjadi di sekolahnya, tak hanya satu, tetapi berulang kali. Teman-teman Jou pun mulai diteror sesuatu yang tak kasatmata. Jou kembali terjebak. Tanpa sadar dia telah membangkitkan sesuatu yang tertidur selama tiga puluh tahun. Sesuatu yang penuh dendam juga haus darah. Sialnya, Jou sudah tak dapat membedakan mana lawan atau kawan. Salah menebak, Jou akan diantar menuju kematian.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/116549_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 5,
                    "publishers_id" => 3,
                    "title" => "Dilan. Dia Adalah Dilanku Tahun 1990",
                    "author" => "Pidi Baiq",
                    "year" => "2014",
                    "synopsis" => "Bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/74492_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 6,
                    "publishers_id" => 3,
                    "title" => "Milea. Suara Dari Dilan",
                    "author" => "Pidi Baiq",
                    "year" => "2016",
                    "synopsis" => "Tidak ada kisah yang lebih Indah dari kisah cinta di SMA. Sama halnya dengan kisah cinta Dilan dan Milea. Dari yang awalnya benci hingga saling mencintai. Dari yang awalnya manis hingga menjadi rumit. Menjelang reuni akbar,Dilan memutuskan untuk menceritakan kembali masa masa itu.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/95445_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 7,
                    "publishers_id" => 3,
                    "title" => "Ancika. Dia Yang Bersamaku Tahun 1995",
                    "author" => "Pidi Baiq",
                    "year" => "2021",
                    "synopsis" => "Dia memang punya masa lalu, tetapi saya punya Dilan. Ancika. Dia ini, pacarnya Dilan. Mereka saling mengenal setelah Dilan sudah tidak lagi sama Lia. Ya, gitu deh, drama kehidupan namanya juga. Mau bagaimana lagi? Kita ini hanya manusia. Pokoknya, baca aja, deh. Mudah-mudahan menyenangkan.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/118183_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 8,
                    "publishers_id" => 4,
                    "title" => "No Exit",
                    "author" => "Taylor Adams",
                    "year" => "2019",
                    "synopsis" => "Pelakunya pastilah salah satu dari keempat orang itu. Di tengah ketidaktahuan siapa yang bisa dipercaya, Darby harus berhati-hati menyusun rencana penyelamatan gadis itu. Namun, bagaimana jika sebetulnya sang pelaku adalah psikopat keji yang lihai membaca rencana Darby dan selalu beberapa langkah di depan gadis itu?",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/113646_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "id" => 9,
                    "publishers_id" => 4,
                    "title" => "The Name of the Rose",
                    "author" => "Umberto Eco",
                    "year" => "2017",
                    "synopsis" => "Ketenangan Biara Benediktin pecah. Serangkaian kematian misterius membuat para rahib dijalari kengerian. William Baskerville, seorang mantan inkuisitor Fransiskan, dipanggil untuk mengusutnya. Waktunya hanya tujuh hari sebelum pertemuan kelompok Fransiskan dan kelompok Paus yang berkonflik besar diadakan di biara itu. Di tengah pencarian dalang pembunuhan, ada perang antara iman dan logika. William yang seorang rasionalis harus berhadapan dengan keimanan yang kadang membabi buta. Sampai akhirnya, William sadar bahwa ternyata keingintahuan bisa membahayakan. Bahkan, pertanyaan yang dianggap menyerang keimanan bisa membawa seseorang berhadapan dengan kematian.",
                    "image" => "https://www.bukukita.com/babacms/displaybuku/98937_f.jpg",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]

            ]
        );
    }
}
