<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\User;
use App\Models\Level;
use App\Models\Category;
use Faker\Factory;

class ArticleWithCategoryLevelAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {

        $faker = Factory::create();

        // Insert data ke tabel levels
        $levels = [
            ['nama' => 'Admin'],
            ['nama' => 'Editor'],
            ['nama' => 'Contributor'],
            ['nama' => 'Guest'],
        ];

        foreach ($levels as $level) {
            Level::create($level);
        }

        // Insert data ke tabel users
        $faker = Factory::create();

        $users = [];
        for ($i = 0; $i < 10; $i++) {
            $users[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'id_level' => Level::inRandomOrder()->first()->id_level,
            ];
        }

        User::insert($users);

        // Insert data ke tabel categories
        $categories = [
            ['nama' => 'Teknologi'],
            ['nama' => 'Kesehatan'],
            ['nama' => 'Pendidikan'],
            ['nama' => 'Olahraga'],
            ['nama' => 'Travel'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $articles = [
            [
                'banner' => 'https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Pengaruh Teknologi Terhadap Industri Manufaktur',
                'body' => "Teknologi terus berkembang pesat dan memberikan dampak signifikan pada berbagai sektor, termasuk industri manufaktur. Dengan adanya otomasi dan mesin canggih, proses produksi menjadi lebih efisien dan cepat. Selain itu, penggunaan AI dan machine learning juga membantu dalam analisis data dan prediksi permintaan, sehingga perusahaan dapat membuat keputusan yang lebih baik.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://plus.unsplash.com/premium_photo-1683836722388-8643468c327d?q=80&w=2012&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Revolusi Blockchain dalam Bisnis',
                'body' => "Blockchain adalah teknologi yang mengubah cara transaksi dan data disimpan. Dengan menggunakan blockchain, bisnis dapat meningkatkan keamanan dan transparansi dalam berbagai proses, seperti supply chain management dan keuangan. Blockchain juga membantu mengurangi biaya dan meningkatkan efisiensi.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Penerapan AI dalam Pelayanan Kesehatan',
                'body' => "Artificial Intelligence (AI) memiliki potensi besar dalam meningkatkan kualitas pelayanan kesehatan. Dengan menggunakan AI, dokter dapat melakukan diagnosis yang lebih akurat dan cepat. Selain itu, AI juga dapat digunakan untuk pengembangan obat baru dan manajemen pasien.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Pendidikan Jarak Jauh: Tantangan dan Peluang',
                'body' => "Pendidikan jarak jauh menjadi pilihan yang populer terutama setelah pandemi. Meskipun memiliki tantangan seperti kurangnya interaksi langsung, pendidikan jarak jauh juga membuka peluang baru bagi siswa di berbagai daerah. Teknologi seperti video conferencing dan platform pembelajaran online memudahkan proses belajar mengajar.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1533808235766-376cdc7e7661?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Upaya Pemulihan Ekosistem di Indonesia',
                'body' => "Indonesia memiliki keanekaragaman hayati yang kaya, namun terancam oleh perubahan iklim dan deforestasi. Upaya pemulihan ekosistem seperti reboisasi dan pengelolaan lahan hijau menjadi penting untuk menjaga keseimbangan alam. Pemerintah dan masyarakat berperan aktif dalam upaya ini.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1579621970795-87facc2f976d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Investasi di Era Digital',
                'body' => "Era digital membuka peluang investasi baru seperti cryptocurrency dan investasi teknologi. Namun, investasi di era digital juga memiliki risiko yang harus diwaspadai. Pemahaman yang baik tentang pasar dan analisis teknikal menjadi penting untuk sukses dalam investasi.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1504150558240-0b4fd8946624?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Perjalanan Wisata Ramah Lingkungan',
                'body' => "Wisata ramah lingkungan menjadi pilihan yang populer bagi para wisatawan yang peduli terhadap alam. Dengan mengikuti praktik ramah lingkungan seperti penggunaan transportasi ramah lingkungan dan penghematan energi, wisatawan dapat berkontribusi dalam menjaga keberlanjutan alam.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?q=80&w=1999&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Olahraga di Era Pandemi',
                'body' => "Pandemi telah mengubah cara berolahraga bagi banyak orang. Aktivitas olahraga indoor seperti yoga dan pilates menjadi populer. Selain itu, olahraga online juga menjadi pilihan bagi mereka yang ingin tetap aktif meskipun berada di rumah.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1482049016688-2d3e1b311543?q=80&w=2020&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Makanan Sehat untuk Pekerja Kantoran',
                'body' => "Makanan sehat menjadi penting bagi kesehatan dan produktivitas pekerja kantoran. Makanan seperti sayuran, buah-buahan, dan protein nabati dapat membantu meningkatkan energi dan konsentrasi. Selain itu, makanan sehat juga membantu mencegah berbagai penyakit kronis.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1544652478-6653e09f18a2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Gaming di Era Digital',
                'body' => "Gaming telah menjadi hiburan yang populer di era digital. Dengan adanya game online dan platform streaming, pengalaman gaming menjadi lebih interaktif dan menarik. Selain itu, gaming juga membuka peluang karir baru seperti profesional gaming dan game development.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Muzikalisasi dalam Industri Film',
                'body' => "Muzikalisasi memainkan peran penting dalam industri film. Musik dapat menambah nuansa dan emosi pada film, membuat pengalaman menonton lebih mendalam. Komposer film seperti Hans Zimmer dan John Williams terkenal dengan karyanya yang mengesankan.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://plus.unsplash.com/premium_photo-1683121263622-664434494177?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Tren Mode Musim Hujan 2025',
                'body' => "Tren mode musim hujan 2025 menekankan pada pakaian yang nyaman dan tahan air. Bahan seperti katun dan poliester menjadi pilihan utama. Selain itu, aksen warna cerah dan desain unik juga menjadi tren yang populer.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1622673038079-de1ddac26c16?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Buku Terbaik 2025',
                'body' => "Buku-buku terbaik 2025 mencakup berbagai genre seperti fiksi ilmiah, novel misteri, dan biografi. Beberapa judul yang menarik termasuk 'The Future of AI' oleh Jane Smith dan 'Mystery at the Manor' oleh John Doe.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDB8fHRlY2hub2xvZ3l8ZW58MHx8MHx8fDA%3D',
                'title' => 'Inovasi Teknologi dalam Pendidikan',
                'body' => "Inovasi teknologi membuka peluang baru dalam pendidikan. Penggunaan virtual reality (VR) dan augmented reality (AR) dapat meningkatkan pengalaman belajar. Selain itu, teknologi seperti AI juga dapat digunakan untuk personalisasi pembelajaran.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Kesehatan Mental di Era Digital',
                'body' => "Era digital membawa tantangan baru bagi kesehatan mental. Penggunaan media sosial berlebihan dapat menyebabkan stres dan depresi. Penting untuk menjaga keseimbangan antara waktu online dan offline, serta mencari dukungan jika diperlukan.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1568849676085-51415703900f?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Destinasi Wisata Terbaik 2025',
                'body' => "Destinasi wisata terbaik 2025 mencakup berbagai tempat menarik di seluruh dunia. Beberapa rekomendasi termasuk Bali, Paris, dan Tokyo. Setiap destinasi menawarkan pengalaman unik dan menarik bagi para wisatawan.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Olahraga Parahyangan: Kesenangan dan Kesehatan',
                'body' => "Olahraga Parahyangan menjadi pilihan yang populer bagi para pecinta alam. Aktivitas seperti hiking, rafting, dan camping dapat meningkatkan kesehatan dan memberikan kesenangan. Selain itu, olahraga Parahyangan juga membantu menjaga keberlanjutan alam.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1467003909585-2f8a72700288?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Resep Masakan Sehat untuk Pemula',
                'body' => "Resep masakan sehat dapat membantu meningkatkan kesehatan dan kebugaran. Beberapa resep sederhana termasuk salad buah-buahan, nasi goreng sayuran, dan smoothie bowl. Selain enak, resep-resep ini juga mudah diikuti oleh pemula.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Tantangan dan Peluang dalam Industri Gaming',
                'body' => "Industri gaming terus berkembang pesat dan membawa tantangan serta peluang baru. Tantangan termasuk persaingan yang sengit dan regulasi yang ketat. Peluang termasuk pengembangan game baru dan peluang karir dalam bidang ini.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Muzikalisasi dalam Film Horror',
                'body' => "Muzikalisasi dalam film horror memiliki peran penting dalam menciptakan suasana yang menakutkan dan menegangkan. Musik dapat meningkatkan emosi dan intensitas adegan dalam film. Komposer film horror seperti Danny Elfman terkenal dengan karyanya yang mengesankan.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Tren Mode Musim Dingin 2025',
                'body' => "Tren mode musim dingin 2025 menekankan pada pakaian yang hangat dan nyaman. Bahan seperti wol dan suede menjadi pilihan utama. Selain itu, aksen warna gelap dan desain modern juga menjadi tren yang populer.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1607473129014-0afb7ed09c3a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Buku Non-Fiksi Terbaik 2025',
                'body' => "Buku non-fiksi terbaik 2025 mencakup berbagai topik seperti sejarah, biografi, dan sains. Beberapa judul yang menarik termasuk 'The History of the World' oleh Alice Johnson dan 'The Science of Happiness' oleh Bob Brown.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1535223289827-42f1e9919769?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Penerapan AI dalam Bisnis E-commerce',
                'body' => "Artificial Intelligence (AI) memiliki potensi besar dalam meningkatkan efisiensi bisnis e-commerce. Dengan menggunakan AI, perusahaan dapat melakukan analisis data pelanggan dan membuat rekomendasi produk yang lebih akurat. Selain itu, AI juga dapat digunakan untuk otomatisasi proses pemesanan dan pengiriman.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1502139214982-d0ad755818d8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Pentingnya Olahraga untuk Kesehatan Mental',
                'body' => "Olahraga memiliki dampak positif terhadap kesehatan mental. Aktivitas fisik dapat mengurangi stres dan meningkatkan mood. Selain itu, olahraga juga membantu meningkatkan kualitas tidur dan konsentrasi.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1528543606781-2f6e6857f318?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Pengalaman Wisata di Bali',
                'body' => "Bali adalah destinasi wisata yang menarik dengan keindahan alamnya. Beberapa tempat yang wajib dikunjungi termasuk Pantai Kuta, Taman Nasional Bali Barat, dan Air Terjun Tegenungan. Selain itu, kuliner Bali juga menjadi daya tarik tersendiri.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1547347298-4074fc3086f0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Pengembangan Olahraga di Indonesia',
                'body' => "Pengembangan olahraga di Indonesia terus berlangsung dengan berbagai program dan inisiatif. Dengan adanya dukungan pemerintah dan masyarakat, olahraga menjadi bagian integral dari kehidupan sehari-hari. Beberapa olahraga yang populer termasuk sepak bola, bulu tangkis, dan renang.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1695654403691-e034c4addd77?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Resep Masakan Indonesia yang Lezat',
                'body' => "Resep masakan Indonesia memiliki keunikan dan cita rasa yang khas. Beberapa resep yang lezat termasuk rendang, nasi goreng, dan soto. Selain enak, resep-resep ini juga mudah diikuti oleh pemula.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1616588589676-62b3bd4ff6d2?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Tantangan dan Peluang dalam Industri Esports',
                'body' => "Industri esports terus berkembang pesat dan membawa tantangan serta peluang baru. Tantangan termasuk persaingan yang sengit dan regulasi yang ketat. Peluang termasuk pengembangan game baru dan peluang karir dalam bidang ini.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1502773860571-211a597d6e4b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Muzikalisasi dalam Film Drama',
                'body' => "Muzikalisasi dalam film drama memiliki peran penting dalam menciptakan suasana yang emosional dan menarik. Musik dapat meningkatkan emosi dan intensitas adegan dalam film. Komposer film drama seperti Thomas Newman terkenal dengan karyanya yang mengesankan.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Tren Mode Musim Panas 2025',
                'body' => "Tren mode musim panas 2025 menekankan pada pakaian yang ringan dan nyaman. Bahan seperti katun dan linen menjadi pilihan utama. Selain itu, aksen warna cerah dan desain modern juga menjadi tren yang populer.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
            [
                'banner' => 'https://images.unsplash.com/photo-1510172951991-856a654063f9?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'title' => 'Buku Fiksi Terbaik 2025',
                'body' => "Buku fiksi terbaik 2025 mencakup berbagai genre seperti fantasi, misteri, dan sci-fi. Beberapa judul yang menarik termasuk 'The Last Wizard' oleh Carol White dan 'Mystery in the City' oleh David Green.",
                'published_at' => $faker->dateTimeBetween('-1 month', 'now'),
                'status' => 'publish',
                'user_id' => User::inRandomOrder()->first()->id, // yang berarti dia akan memasukkan id dari User
                'id_kategori' => Category::inRandomOrder()->first()->id_kategori, // dia akan memilih dan memassukkan id dari kategori secara random
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
