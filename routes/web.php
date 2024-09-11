<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

// Beranda
Route::get('/', function () {
    $posts = Post::all()->take(6); // Menggunakan koleksi Laravel untuk mengambil 6 data

    return view('index', [
        "title" => 'Beranda',
        'posts' => $posts
    ]);
});

// Pelayanan
Route::get('/pelayanan', function () {
    $search = request()->get('search');
    $posts = Post::all();

    if ($search) {
        $posts = $posts->filter(function ($post) use ($search) {
            return stripos($post['perkara'], $search) !== false;
        });
    }

    return view('pelayanan', [
        "title" => 'Pelayanan',
        'posts' => $posts
    ]);
});


//persyaratan slug
Route::get('/pelayanan/{slug}', function ($slug) {
    // $post = Post::where('slug', $slug)->first();

    $post = Post::findBySlug ($slug);

    if (!$post) {
        abort(404, 'Pelayanan tidak ditemukan.');
    }

    return view('detail-pelayanan', [
        'title' => 'Detail Perkara',
        'post' => $post
    ]);
});



// Persyaratan
Route::get('/persyaratan', function () {
    return view('persyaratan', [
        'title' => "Persyaratan"
    ]);
});

// Kontak
Route::get('/kontak', function () {
    return view('kontak', [
        "title" => 'Kontak'
    ]);
});

// Prestasi
Route::get('/prestasi', function () {
    $achievements = [
        [
            'title' => 'Penilaian Keberhasilan Mediasi Pengadilan Agama Sewilayah Pengadilan Tinggi Agama Manado Tahun 2022',
            'description' => 'Pengadilan Agama Amurang dengan bangga menerima sertifikasi prestasi dalam "Penilaian Keberhasilan Mediasi Pengadilan Agama Sewilayah Pengadilan Tinggi Agama Maando Tahun 2022." Penghargaan bergengsi ini merupakan pengakuan atas komitmen kami dalam mewujudkan proses mediasi yang efektif dan berkeadilan, serta keberhasilan kami dalam menyelesaikan sengketa secara damai dan harmonis.',
            'image' => 'img/certificates/certificate1.jpg', // Path gambar sertifikat
        ],
        [
            'title' => 'Peserta Terbaik Pertama',
            'description' => 'Pengadilan Agama Amurang dengan bangga mengumumkan pencapaian luar biasa sebagai Peserta Terbaik Pertama pada Pelaksanaan Bimbingan Teknis bagi Hakim Pengadilan Agama Sewilayah Pengadilan Tinggi Agama Manado. Acara bergengsi ini berlangsung di Hotel Grand Whiz Megamas Manado pada tanggal 22 Mei 2024, dan menjadi ajang untuk meningkatkan kapasitas serta kualitas para hakim dalam melaksanakan tugas-tugas peradilan.',
            'image' => 'img/certificates/certificate2.jpg',
        ],
        [
            'title' => 'Sertifikasi Prestasi: Peringkat 2 Penilaian Kecepatan dan Ketepatan Pengiriman Laporan Bulanan Sewilayah Pengadilan Tinggi Agama Manado Tahun 2023',
            'description' => 'Pengadilan Agama Amurang dengan bangga mengumumkan pencapaian luar biasa sebagai Peringkat 2 dalam Penilaian Kecepatan dan Ketepatan Pengiriman Laporan Bulanan Sewilayah Pengadilan Tinggi Agama Manado Tahun 2023. Penghargaan ini merupakan bukti nyata dari komitmen kami terhadap efisiensi dan akurasi dalam pelaporan, yang merupakan bagian integral dari operasional kami.',
            'image' => 'img/certificates/certificate3.jpg',
        ],
        [
            'title' => 'Penilaian E-Court Peringkat 1',
            'description' => 'Pengadilan Agama Amurang dengan bangga mengumumkan pencapaian luar biasa sebagai Peringkat 1 dalam Penilaian E-Court. Penghargaan bergengsi ini adalah pengakuan atas dedikasi dan komitmen kami dalam menerapkan teknologi informasi untuk meningkatkan aksesibilitas, efisiensi, dan transparansi dalam sistem peradilan.',
            'image' => 'img/certificates/certificate4.jpg',
        ],
        [
            'title' => 'Penilaian Keberhasilan Mediasi Peringkat 2',
            'description' => 'Pengadilan Agama Amurang dengan bangga mengumumkan pencapaian luar biasa sebagai Peringkat 2 dalam Penilaian Keberhasilan Mediasi. Penghargaan ini merupakan pengakuan atas komitmen kami dalam menyelesaikan sengketa melalui mediasi yang efektif dan harmonis, serta dedikasi kami untuk memberikan solusi terbaik bagi masyarakat.',
            'image' => 'img/certificates/certificate5.jpg',
        ],
        [
            'title' => 'Penilaian Pengelolaan SIKEP Sewilayah Pengadilan Tinggi Agama Manado Tahun 2022',
            'description' => 'Pengadilan Agama Amurang dengan bangga mengumumkan pencapaian luar biasa dalam Penilaian Pengelolaan Sistem Informasi Kepegawaian (SIKEP) Sewilayah Pengadilan Tinggi Agama Manado Tahun 2022. Penghargaan ini merupakan pengakuan atas dedikasi dan komitmen kami dalam mengelola sistem kepegawaian dengan efisien dan transparan, memastikan bahwa setiap aspek manajemen sumber daya manusia berjalan dengan optimal.',
            'image' => 'img/certificates/certificate6.jpg',
        ],
        // Tambahkan data prestasi lainnya sesuai kebutuhan
    ];

    return view('prestasi', [
        'title' => 'Prestasi',
        'achievements' => $achievements,
    ]);
});


//laporan tahunan
Route::get('/laporan-tahunan', function(){
    return view ('laporan-tahunan', [
        'title' => 'laporan-tahunan'
    ]);
});