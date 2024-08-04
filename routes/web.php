<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        "title" => 'Beranda'
    ]);
});



Route::get('/pelayanan', function () {
return view('pelayanan',
    ["title" => 'Pelayanan', 'posts' => 
        [
            [
                'id' => '1',
                'perkara' => 'Pengangkatan Anak',
                'deskripsi' => 'Perubahan yang terjadi adalah pemindahan tanggung jawab pemeliharaan dan pengawasan dari orang tua asli kepada orang tua angkat, tetapi status anak angkat tetap sebagai anak kandung'
            ],
            [
                'id' => '2',
                'perkara' => 'Hak Asu Anak',
                'deskripsi' => 'Hak asuh anak menurut pengadilan agama adalah hak dan kewajiban yang diberikan kepada salah satu atau kedua orang tua untuk merawat, mendidik, dan menjaga anak-anak setelah terjadi perceraian atau perpisahan.'
            ],
            [
                'id' => '3',
                'perkara' => "Wali A'dhal",
                'deskripsi' => 'merujuk kepada wali yang enggan atau menolak memberikan izin pernikahan bagi seorang wanita yang berada di bawah perwaliannya tanpa alasan yang sah atau dibenarkan oleh syariat Islam.'
            ],
            [
                'id' => '4',
                'perkara' => 'Harta Bersama/Harta Gono Gini',
                'deskripsi' => 'harta yang diperoleh oleh pasangan suami istri selama pernikahan berlangsung. Harta ini mencakup semua jenis aset dan properti yang didapatkan oleh kedua belah pihak setelah pernikahan, tanpa memperhitungkan siapa yang secara langsung membeli atau mendapatkan aset tersebut.'
            ],
            [
                'id' => '5',
                'perkara' => 'Poligami',
                'deskripsi' => 'praktik di mana seorang pria menikahi lebih dari satu wanita pada waktu yang sama, sesuai dengan hukum Islam dan peraturan yang berlaku di Indonesia.'
            ],
            [
                'id' => '6',
                'perkara' => 'Pengesahan Nikah (Istibat Nikah)',
                'deskripsi' => ' proses hukum untuk mengesahkan pernikahan yang telah dilaksanakan secara agama tetapi belum tercatat atau diakui secara resmi oleh negara.'
            ],
            [
                'id' => '7',
                'perkara' => 'Cerai Gugat/Talak',
                'deskripsi' => ' Cerai gugat adalah perceraian yang diajukan oleh pihak istri terhadap suami. Proses ini disebut "gugatan cerai" dan dilakukan melalui pengadilan agama. '
            ],
            [
                'id' => '8',
                'perkara' => 'Marfuq',
                'deskripsi' => 'Marfuq adalah istilah yang digunakan dalam hukum Islam untuk merujuk pada seseorang yang telah meninggal dunia. Dalam konteks Pengadilan Agama, terdapat berbagai jenis permohonan yang berkaitan dengan hukum Islam dan perkara di tingkat pertama antara orang-orang yang beragama Islam'
            ],
            [
                'id' => '9',
                'perkara' => 'Pembatalan Nikah',
                'deskripsi' => ' Pembatalan perkawinan, yang juga dikenal sebagai fasakh, adalah tindakan pengadilan agama untuk membatalkan ikatan pernikahan. Ini terjadi ketika salah satu pihak atau keduanya tidak memenuhi syarat-syarat yang ditetapkan oleh hukum atau peraturan perundang-undangan. Berdasarkan Pasal 22 UU Perkawinan, perkawinan dapat dibatalkan jika para pihak tidak memenuhi syarat-syarat untuk melangsungkan perkawinan.'
            ],
            [
                'id' => '10',
                'perkara' => 'Dispensasi Nikah',
                'deskripsi' => ' Dispensasi nikah adalah kelonggaran hukum yang diberikan kepada mereka yang ingin menikah, tetapi belum mencapai batas usia pernikahan yang telah ditetapkan oleh pemerintah. Orang tua atau wali anak yang belum cukup umur dapat mengajukan dispensasi nikah ke Pengadilan Agama melalui proses persidangan untuk mendapatkan izin perkawinan.'
            ],
            [
                'id' => '11',
                'perkara' => 'Harta Waris',
                'deskripsi' => 'harta peninggalan seseorang setelah meninggal dunia. Dalam hukum peradilan agama di Indonesia, terutama dalam Islam, aturan-aturan waris diatur oleh hukum Islam atau hukum syariah. Proses waris mengikuti prinsip Faraid, yang menentukan bagaimana harta pusaka harus didistribusikan kepada ahli waris sesuai dengan ketentuan agama.'
            ],
            [
                'id' => '12',
                'perkara' => 'Surat Kuasa Isidentil',
                'deskripsi' => ' surat yang memberikan wewenang kepada seseorang untuk bertindak atas nama pemberi kuasa dalam suatu kegiatan atau urusan tertentu yang bersifat insidental. Surat ini biasanya digunakan dalam situasi di mana pemberi kuasa tidak dapat hadir atau tidak mampu melaksanakan tugas-tugas tertentu sendiri.'
            ],
            [
                'id' => '13',
                'perkara' => 'Duplikat Akta Cerai',
                'deskripsi' => 'Duplikat akta cerai adalah salinan atau penggantian akta perceraian yang hilang atau rusak diterbitkan sebagai bukti resmi bahwa pihak yang bersangkutan telah bercerai secara hukum.'
            ],
            [
                'id' => '14',
                'perkara' => 'Perubahan Nama',
                'deskripsi' => 'proses hukum yang memungkinkan seseorang untuk secara resmi mengubah namanya dengan mendapatkan persetujuan dari pengadilan agama.'
            ],
            [
                'id' => '15',
                'perkara' => 'Perwalian',
                'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan seorang wali untuk anak yang belum dewasa atau seseorang yang dianggap tidak mampu mengurus dirinya sendiri dan/atau hartanya.'
            ],
            [
                'id' => '16',
                'perkara' => 'Penetapan Ahli Waris',
                'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan siapa saja yang berhak menjadi ahli waris dari seseorang yang telah meninggal dunia, serta menentukan bagian masing-masing ahli waris sesuai dengan ketentuan hukum Islam.'
            ],
            [
                'id' => '17',
                'perkara' => 'Permohonan Asal-Usul Anak',
                'deskripsi' => 'proses hukum di mana seseorang mengajukan permohonan ke pengadilan agama untuk mendapatkan penetapan hukum mengenai asal usul seorang anak.'
            ],
        ]

    ]);
});























Route::get('/pelayanan/{id}', function ($id) {

    $posts = [
            [
                'id' => '1',
                'perkara' => 'Pengangkatan Anak',
                'deskripsi' => 'Perubahan yang terjadi adalah pemindahan tanggung jawab pemeliharaan dan pengawasan dari orang tua asli kepada orang tua angkat, tetapi status anak angkat tetap sebagai anak kandung'
            ],
            [
                'id' => '2',
                'perkara' => 'Hak Asu Anak',
                'deskripsi' => 'Hak asuh anak menurut pengadilan agama adalah hak dan kewajiban yang diberikan kepada salah satu atau kedua orang tua untuk merawat, mendidik, dan menjaga anak-anak setelah terjadi perceraian atau perpisahan.'
            ],
            [
                'id' => '3',
                'perkara' => "Wali A'dhal",
                'deskripsi' => 'merujuk kepada wali yang enggan atau menolak memberikan izin pernikahan bagi seorang wanita yang berada di bawah perwaliannya tanpa alasan yang sah atau dibenarkan oleh syariat Islam.'
            ],
            [
                'id' => '4',
                'perkara' => 'Harta Bersama/Harta Gono Gini',
                'deskripsi' => 'harta yang diperoleh oleh pasangan suami istri selama pernikahan berlangsung. Harta ini mencakup semua jenis aset dan properti yang didapatkan oleh kedua belah pihak setelah pernikahan, tanpa memperhitungkan siapa yang secara langsung membeli atau mendapatkan aset tersebut.'
            ],
            [
                'id' => '5',
                'perkara' => 'Poligami',
                'deskripsi' => 'praktik di mana seorang pria menikahi lebih dari satu wanita pada waktu yang sama, sesuai dengan hukum Islam dan peraturan yang berlaku di Indonesia.'
            ],
            [
                'id' => '6',
                'perkara' => 'Pengesahan Nikah (Istibat Nikah)',
                'deskripsi' => ' proses hukum untuk mengesahkan pernikahan yang telah dilaksanakan secara agama tetapi belum tercatat atau diakui secara resmi oleh negara.'
            ],
            [
                'id' => '7',
                'perkara' => 'Cerai Gugat/Talak',
                'deskripsi' => ' Cerai gugat adalah perceraian yang diajukan oleh pihak istri terhadap suami. Proses ini disebut "gugatan cerai" dan dilakukan melalui pengadilan agama. '
            ],
            [
                'id' => '8',
                'perkara' => 'Marfuq',
                'deskripsi' => 'Marfuq adalah istilah yang digunakan dalam hukum Islam untuk merujuk pada seseorang yang telah meninggal dunia. Dalam konteks Pengadilan Agama, terdapat berbagai jenis permohonan yang berkaitan dengan hukum Islam dan perkara di tingkat pertama antara orang-orang yang beragama Islam'
            ],
            [
                'id' => '9',
                'perkara' => 'Pembatalan Nikah',
                'deskripsi' => ' Pembatalan perkawinan, yang juga dikenal sebagai fasakh, adalah tindakan pengadilan agama untuk membatalkan ikatan pernikahan. Ini terjadi ketika salah satu pihak atau keduanya tidak memenuhi syarat-syarat yang ditetapkan oleh hukum atau peraturan perundang-undangan. Berdasarkan Pasal 22 UU Perkawinan, perkawinan dapat dibatalkan jika para pihak tidak memenuhi syarat-syarat untuk melangsungkan perkawinan.'
            ],
            [
                'id' => '10',
                'perkara' => 'Dispensasi Nikah',
                'deskripsi' => ' Dispensasi nikah adalah kelonggaran hukum yang diberikan kepada mereka yang ingin menikah, tetapi belum mencapai batas usia pernikahan yang telah ditetapkan oleh pemerintah. Orang tua atau wali anak yang belum cukup umur dapat mengajukan dispensasi nikah ke Pengadilan Agama melalui proses persidangan untuk mendapatkan izin perkawinan.'
            ],
            [
                'id' => '11',
                'perkara' => 'Harta Waris',
                'deskripsi' => 'harta peninggalan seseorang setelah meninggal dunia. Dalam hukum peradilan agama di Indonesia, terutama dalam Islam, aturan-aturan waris diatur oleh hukum Islam atau hukum syariah. Proses waris mengikuti prinsip Faraid, yang menentukan bagaimana harta pusaka harus didistribusikan kepada ahli waris sesuai dengan ketentuan agama.'
            ],
            [
                'id' => '12',
                'perkara' => 'Surat Kuasa Isidentil',
                'deskripsi' => ' surat yang memberikan wewenang kepada seseorang untuk bertindak atas nama pemberi kuasa dalam suatu kegiatan atau urusan tertentu yang bersifat insidental. Surat ini biasanya digunakan dalam situasi di mana pemberi kuasa tidak dapat hadir atau tidak mampu melaksanakan tugas-tugas tertentu sendiri.'
            ],
            [
                'id' => '13',
                'perkara' => 'Duplikat Akta Cerai',
                'deskripsi' => 'Duplikat akta cerai adalah salinan atau penggantian akta perceraian yang hilang atau rusak diterbitkan sebagai bukti resmi bahwa pihak yang bersangkutan telah bercerai secara hukum.'
            ],
            [
                'id' => '14',
                'perkara' => 'Perubahan Nama',
                'deskripsi' => 'proses hukum yang memungkinkan seseorang untuk secara resmi mengubah namanya dengan mendapatkan persetujuan dari pengadilan agama.'
            ],
            [
                'id' => '15',
                'perkara' => 'Perwalian',
                'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan seorang wali untuk anak yang belum dewasa atau seseorang yang dianggap tidak mampu mengurus dirinya sendiri dan/atau hartanya.'
            ],
            [
                'id' => '16',
                'perkara' => 'Penetapan Ahli Waris',
                'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan siapa saja yang berhak menjadi ahli waris dari seseorang yang telah meninggal dunia, serta menentukan bagian masing-masing ahli waris sesuai dengan ketentuan hukum Islam.'
            ],
            [
                'id' => '17',
                'perkara' => 'Permohonan Asal-Usul Anak',
                'deskripsi' => 'proses hukum di mana seseorang mengajukan permohonan ke pengadilan agama untuk mendapatkan penetapan hukum mengenai asal usul seorang anak.'
            ],
        ];

        // $post = Arr::first($Post::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        

        $post = Arr::first($posts, function ($post) use ($id) {
            return $post['id'] == $id;
        });


        // dd($post);

            // Jika post tidak ditemukan, lemparkan 404 atau pesan kesalahan lainnya
    if (!$post) {
        abort(404, 'Pelayanan tidak ditemukan.');
    }
    
        return view('detail-pelayanan', ['title' => 'detail', 'post' => $post]);
});






Route::get('/persyaratan', function () {
    return view ('persyaratan', [
        'title' => "Persyaratan"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => 'Kontak'
    ]);
});