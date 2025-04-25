<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title' => 'Tren Kopi Spesialti: Meningkatnya Minat Konsumen terhadap Kopi Berkualitas Tinggi',
                'excerpt' => 'Kopi spesialti menjadi tren yang semakin populer di kalangan konsumen. Artikel ini membahas tentang meningkatnya minat konsumen terhadap kopi berkualitas tinggi.',
                'content' => '<p>Dalam beberapa tahun terakhir, terjadi pergeseran signifikan dalam preferensi konsumen kopi. Kopi spesialti, yang dikenal dengan kualitas biji yang superior, metode pengolahan yang cermat, dan profil rasa yang kompleks, telah menarik perhatian banyak penikmat kopi.</p><p>Kopi spesialti bukan sekadar minuman. Ini adalah pengalaman rasa yang unik, dihasilkan dari biji berkualitas tinggi, metode panen yang tepat, dan proses pengolahan yang cermat. Petani kopi spesialti memperhatikan setiap detail, dari penanaman hingga panen, untuk menghasilkan biji kopi terbaik.</p><p>Meningkatnya kesadaran konsumen tentang kualitas dan asal-usul produk yang mereka konsumsi telah mendorong popularitas kopi spesialti. Konsumen modern tidak hanya mencari kopi yang enak, tetapi juga kopi yang diproduksi secara etis dan berkelanjutan.</p>',
                'image' => 'articles/kopi-spesialti.jpg',
                'author' => 'Risa Kartika Artanti',
                'category' => 'Perkebunan',
                'published_at' => Carbon::now()->subDays(5),
            ],
            [
                'title' => 'Peran Artificial Intelligence (AI) dalam Memprediksi Hama dan Penyakit pada Tanaman Sayuran',
                'excerpt' => 'Teknologi AI kini memainkan peran penting dalam pertanian modern, terutama dalam memprediksi dan mengatasi serangan hama dan penyakit pada tanaman sayuran.',
                'content' => '<p>Artificial Intelligence (AI) telah merevolusi berbagai industri, termasuk pertanian. Dalam konteks pertanian, AI membantu petani dalam memprediksi serangan hama dan penyakit pada tanaman, memungkinkan tindakan pencegahan yang lebih efektif.</p><p>Dengan menggunakan algoritma machine learning, sistem AI dapat menganalisis data dari berbagai sumber, seperti gambar tanaman, data cuaca, dan riwayat serangan hama, untuk memprediksi kemungkinan serangan di masa depan. Hal ini memungkinkan petani untuk mengambil tindakan preventif sebelum serangan terjadi.</p><p>Selain itu, AI juga membantu dalam diagnosis penyakit tanaman. Dengan menggunakan teknologi pengenalan gambar, petani dapat mengambil foto tanaman yang terinfeksi dan sistem AI akan mengidentifikasi penyakit serta memberikan rekomendasi penanganan.</p>',
                'image' => 'articles/ai-pertanian.jpg',
                'author' => 'Dr. Ahmad Fauzi',
                'category' => 'Pertanian',
                'published_at' => Carbon::now()->subDays(10),
            ],
            [
                'title' => 'Penerapan Teknologi Drone dalam Pertanian Padi: Solusi untuk Efisiensi dan Produktivitas',
                'excerpt' => 'Drone menjadi teknologi yang semakin populer dalam pertanian padi modern, menawarkan solusi untuk meningkatkan efisiensi dan produktivitas.',
                'content' => '<p>Teknologi drone telah membawa perubahan signifikan dalam praktik pertanian padi. Dengan kemampuan untuk terbang di atas lahan dan mengumpulkan data, drone menawarkan perspektif baru dalam pengelolaan lahan pertanian.</p><p>Salah satu aplikasi utama drone dalam pertanian padi adalah pemetaan lahan. Drone dilengkapi dengan kamera dan sensor dapat menghasilkan peta detail lahan pertanian, membantu petani dalam perencanaan tanam, irigasi, dan pemupukan.</p><p>Selain itu, drone juga digunakan untuk pemantauan kesehatan tanaman. Dengan menggunakan kamera multispektral, drone dapat mendeteksi area tanaman yang stres atau terinfeksi penyakit, memungkinkan petani untuk mengambil tindakan cepat.</p><p>Aplikasi lain yang tidak kalah penting adalah penyemprotan pestisida dan pupuk. Drone dapat melakukan penyemprotan dengan presisi tinggi, mengurangi penggunaan bahan kimia dan dampak lingkungan.</p>',
                'image' => 'articles/drone-pertanian.jpg',
                'author' => 'Ir. Budi Santoso',
                'category' => 'Pertanian',
                'published_at' => Carbon::now()->subDays(15),
            ],
            [
                'title' => 'Permintaan Kopi Organik Meningkat: Peluang bagi Petani untuk Beralih ke Pertanian Berkelanjutan',
                'excerpt' => 'Meningkatnya kesadaran konsumen akan produk organik telah mendorong permintaan kopi organik, menciptakan peluang bagi petani untuk beralih ke praktik pertanian berkelanjutan.',
                'content' => '<p>Dalam beberapa tahun terakhir, terjadi peningkatan signifikan dalam permintaan kopi organik di pasar global. Konsumen semakin sadar akan dampak lingkungan dan kesehatan dari produk yang mereka konsumsi, mendorong mereka untuk memilih produk organik.</p><p>Kopi organik diproduksi tanpa menggunakan pestisida, herbisida, atau pupuk sintetis. Praktik pertanian organik fokus pada kesehatan tanah, konservasi air, dan biodiversitas, menciptakan ekosistem pertanian yang sehat dan berkelanjutan.</p><p>Bagi petani, beralih ke produksi kopi organik menawarkan beberapa keuntungan. Pertama, kopi organik biasanya dijual dengan harga premium, meningkatkan pendapatan petani. Kedua, praktik pertanian organik mengurangi ketergantungan pada input eksternal yang mahal, seperti pestisida dan pupuk sintetis.</p><p>Namun, transisi ke pertanian organik juga menghadirkan tantangan. Petani perlu belajar teknik baru, seperti pembuatan kompos dan pengendalian hama secara alami. Selain itu, proses sertifikasi organik bisa memakan waktu dan biaya.</p>',
                'image' => 'articles/kopi-organik.jpg',
                'author' => 'Dewi Lestari',
                'category' => 'Perkebunan',
                'published_at' => Carbon::now()->subDays(20),
            ],
            [
                'title' => 'Sistem Intensifikasi Padi (SRI): Solusi Hemat Air untuk Produksi Maksimal',
                'excerpt' => 'Sistem Intensifikasi Padi (SRI) menawarkan pendekatan inovatif dalam budidaya padi yang hemat air namun tetap menghasilkan produksi yang maksimal.',
                'content' => '<p>Sistem Intensifikasi Padi (SRI) adalah pendekatan inovatif dalam budidaya padi yang dikembangkan di Madagaskar pada tahun 1980-an. SRI telah terbukti meningkatkan hasil panen sambil mengurangi penggunaan air, benih, dan input lainnya.</p><p>Prinsip dasar SRI meliputi: penanaman bibit muda (8-12 hari), penanaman satu bibit per lubang dengan jarak tanam yang lebar, pengairan berselang (tidak terus-menerus tergenang), dan penggunaan bahan organik untuk meningkatkan kesuburan tanah.</p><p>Salah satu keunggulan utama SRI adalah efisiensi penggunaan air. Dibandingkan dengan metode konvensional yang membutuhkan genangan air terus-menerus, SRI hanya membutuhkan tanah yang lembab, mengurangi penggunaan air hingga 50%.</p><p>Selain itu, SRI juga meningkatkan ketahanan tanaman terhadap hama dan penyakit, serta meningkatkan kualitas beras yang dihasilkan. Dengan input yang lebih sedikit namun hasil yang lebih tinggi, SRI menawarkan solusi berkelanjutan untuk ketahanan pangan di tengah perubahan iklim dan kelangkaan air.</p>',
                'image' => 'articles/sri-padi.jpg',
                'author' => 'Prof. Dr. Slamet Riyadi',
                'category' => 'Pertanian',
                'published_at' => Carbon::now()->subDays(25),
            ],
            [
                'title' => 'Pasar Sayuran Hidroponik: Meningkatnya Minat Konsumen terhadap Produk Sehat',
                'excerpt' => 'Sayuran hidroponik semakin diminati konsumen karena kualitas, kebersihan, dan nilai nutrisinya yang tinggi. Artikel ini membahas tren pasar dan peluang bagi petani hidroponik.',
                'content' => '<p>Hidroponik, metode bercocok tanam tanpa tanah dengan nutrisi yang disalurkan melalui air, telah menjadi tren dalam produksi sayuran modern. Sayuran hidroponik semakin diminati konsumen karena beberapa keunggulannya.</p><p>Pertama, sayuran hidroponik dikenal dengan kebersihannya. Karena ditanam dalam lingkungan terkontrol tanpa tanah, sayuran hidroponik minim kontaminasi dan tidak memerlukan pestisida, menjadikannya pilihan sehat bagi konsumen yang sadar kesehatan.</p><p>Kedua, sayuran hidroponik memiliki kualitas visual yang menarik. Daun yang lebih hijau, ukuran yang seragam, dan penampilan yang segar membuat sayuran hidroponik menarik bagi konsumen dan restoran high-end.</p><p>Ketiga, sayuran hidroponik memiliki umur simpan yang lebih panjang. Karena dipanen dengan akar yang masih utuh, sayuran hidroponik dapat bertahan lebih lama di lemari es, mengurangi pemborosan makanan.</p><p>Bagi petani, hidroponik menawarkan beberapa keuntungan, seperti efisiensi penggunaan air, kontrol penuh atas lingkungan tumbuh, dan kemampuan untuk memproduksi sayuran sepanjang tahun. Namun, investasi awal yang tinggi dan kebutuhan akan pengetahuan teknis menjadi tantangan tersendiri.</p>',
                'image' => 'articles/hidroponik.jpg',
                'author' => 'Ir. Maya Indah',
                'category' => 'Pertanian',
                'published_at' => Carbon::now()->subDays(30),
            ],
            [
                'title' => 'Pupuk Organik dari Limbah Dapur: Cara Sederhana Mendukung Pertanian Berkelanjutan',
                'excerpt' => 'Mengubah limbah dapur menjadi pupuk organik adalah cara sederhana namun efektif untuk mendukung pertanian berkelanjutan dan mengurangi sampah.',
                'content' => '<p>Limbah dapur, seperti sisa sayuran, kulit buah, dan ampas kopi, seringkali berakhir di tempat sampah. Namun, limbah organik ini sebenarnya merupakan bahan baku yang sangat baik untuk pembuatan pupuk kompos.</p><p>Komposting adalah proses alami di mana mikroorganisme menguraikan bahan organik menjadi humus yang kaya nutrisi. Pupuk kompos yang dihasilkan dapat meningkatkan struktur tanah, menambah nutrisi, dan meningkatkan kemampuan tanah untuk menahan air.</p><p>Membuat pupuk kompos dari limbah dapur sangat mudah. Yang Anda butuhkan hanyalah wadah kompos, limbah dapur, dan sedikit kesabaran. Dalam beberapa bulan, Anda akan memiliki pupuk organik berkualitas tinggi untuk tanaman Anda.</p><p>Selain mendukung pertanian berkelanjutan, komposting juga membantu mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir, mengurangi emisi gas rumah kaca, dan menghemat biaya pengelolaan sampah.</p>',
                'image' => 'articles/pupuk-organik.jpg',
                'author' => 'Eko Prasetyo',
                'category' => 'Pertanian',
                'published_at' => Carbon::now()->subDays(35),
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
