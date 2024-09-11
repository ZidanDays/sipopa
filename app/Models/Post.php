<?php

//jgn lupa pake namespace
namespace App\Models;


class Post
{
    public static function all()
    {

        //data ini dibungkus dalam collection

        return
        collect([
            // Data post Anda
            [
                'id' => '1',
                'perkara' => 'Pengangkatan Anak',
                'deskripsi' => 'Perubahan yang terjadi adalah pemindahan tanggung jawab pemeliharaan dan pengawasan dari orang tua asli kepada orang tua angkat, tetapi status anak angkat tetap sebagai anak kandung',
                'syarat' => [
                    'FC KTP orang tua kandung anak',
                    'FC KTP pemohon I dan pemohon II',
                    'FC surat nikah orang tua anak',
                    'FC surat nikah pemohon I dan pemohon II',
                    'Fc Akta Kelahiran Anak',
                    'Surat Keterangan pekerjaan dan penghasilan pemohon diketahui oleh Kepala Desa (diketahui atasan bagi PNS)',
                    'surat Keterangan dari Dinas Sosial',
                    'SKCK',
                    'Surat Keterangan dari Rumah Sakit Jiwa (RSJ)/Surat Keterangan Rohani',
                    'Surat Pernyataan Penyerahan anak dari orang tua kepada Pemohon (bermaterai 10000)',
                    'Surat Permohonan Pengangkatan anak yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar panjar biaya perkara'
                ],
                'slug' => 'pengangkatan-anak',
                'image' => 'pengangkatan anak.jpg'
            ],
            [
                'id' => '2',
                'perkara' => 'Hak Asuh Anak',
                'deskripsi' => 'Hak asuh anak menurut pengadilan agama adalah hak dan kewajiban yang diberikan kepada salah satu atau kedua orang tua untuk merawat, mendidik, dan menjaga anak-anak setelah terjadi perceraian atau perpisahan.',
                'syarat' => [
                    'FC Akta Kelahiran Anak ',
                    'FC Akta Cerai ',
                    'FC KK',
                    'Materai',
                    'KTP Pemohon',
                    'Surat Gugatan hak asuh anak yang ditujukan kepada ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'hak-asu-anak',
                'image' => 'hak asuh anak.jpg'
            ],
            [
                'id' => '3',
                'perkara' => "Wali Adhol",
                'deskripsi' => 'merujuk kepada wali yang enggan atau menolak memberikan izin pernikahan bagi seorang wanita yang berada di bawah perwaliannya tanpa alasan yang sah atau dibenarkan oleh syariat Islam.',
                'syarat' => [
                    'FC KTP Pemohon',
                    'Surat Penolakkan dari KUA',
                    'FC KTP Calon Suami',
                    'Surat Pengantar dari Desa Setempat',
                    'FC Akta Kelahiran ',
                    'FC Kartu Keluarga ',
                    'Surat Pemohon Wali Adhol yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'wali-adhal',
                'image' => "wali a'dhal.jpg"
            ],
            [
                'id' => '4',
                'perkara' => 'Harta Bersama/Harta Gono Gini',
                'deskripsi' => 'harta yang diperoleh oleh pasangan suami istri selama pernikahan berlangsung. Harta ini mencakup semua jenis aset dan properti yang didapatkan oleh kedua belah pihak setelah pernikahan, tanpa memperhitungkan siapa yang secara langsung membeli atau mendapatkan aset tersebut.',
                'syarat' => [
                    'FC KTP Penggugat',
                    'Materai',
                    'FC Akta Cerai',
                    'FC Bukti Tertulis atau barang yang dimaksud seperti : SHM, STNK, Nota Pembelian/Kwitansi, dsb',
                    'Surat Gugatan yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'harta-bersama-harta-gono-gini',
                'image' => 'harta gono gini.jpg'
            ],
            [
                'id' => '5',
                'perkara' => 'Poligami',
                'deskripsi' => 'praktik di mana seorang pria menikahi lebih dari satu wanita pada waktu yang sama, sesuai dengan hukum Islam dan peraturan yang berlaku di Indonesia.',
                'syarat' => [
                    'Surat Pernyataan rela dimadu dari istri pertama dan istri kedua (bermaterai 10000)',
                    'Surat Pernyataan berlaku adil dari suami (bermaterai 1000)',
                    'FC Surat Nikah dengan Istri Pertama',
                    'FC KTP suami,istri, dan calon istri',
                    'FC Akta Surat Kematian suami/Akta Cerai (jika janda) ISTRI KEDUA',
                    'Surat Keterangan dari status dari Calon Istri Ke-Dua dari Kelurahan Desa Setempat',
                    'Daftar harta gono gini dengan istri pertama dan seterusnya dan diketahui Kepala Desa/Lurah',
                    'Surat Keterangan penghasilan suami dan diketahui Kepala Desa/Lurah',
                    'FC Akta Surat Kematian suami/Akta Cerai (jika janda)',
                    'Surat Izin dari Atasan (PNS,TNI/POLRI)',
                    'Surat Pemohon akan Poligami yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar panjar biaya perkara',
                    'CATATAN : BERPERKARA SECARA E-COURT, MENYERAHKAN ALAMAT EMAIL'
                ],
                'slug' => 'poligami',
                'image' => 'poligami.jpg'
            ],
            [
                'id' => '6',
                'perkara' => 'Pengesahan Nikah (Isbat Nikah)',
                'deskripsi' => 'proses hukum untuk mengesahkan pernikahan yang telah dilaksanakan secara agama tetapi belum tercatat atau diakui secara resmi oleh negara.',
                'syarat' => [
                    'FC KTP atau surat domisili asli dan FC alamat sama para pemohon ',
                    'Kartu Keluarga',
                    'FC Surat Kematian suami/istri Pemohon yang meninggal (jika cerai mati)',
                    'FC Akta Cerai (jika cerai hidup), ',
                    'Surat Keterangan dari Kelurahan status suami istri sebelum menikah',
                    'Surat Pengantar dari KUA tentang tidiak tercatatnya pernikahan pada register KUA',
                    'Surat Pemohon Isbat Nikah yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'pengesahan-nikah-isbat-nikah',
                'image' => 'pengesahan_nikah.jpg'
            ],
            [
                'id' => '7',
                'perkara' => 'Cerai Gugat/Talak',
                'deskripsi' => 'Cerai gugat adalah perceraian yang diajukan oleh pihak istri terhadap suami. Proses ini disebut "gugatan cerai" dan dilakukan melalui pengadilan agama.',
                'syarat' => [
                    'Buku Nikah suami istri asli/duplikat kutipan akta nikah',
                    'FC Buku Nikah/duplikat akta nikah ',
                    'FC KTP Penggugat/Pemohon',
                    'Surat Izin Penceraian dari atasan bagi PNS, TNI/POLRI',
                    'Surat Keterangan dari Desa/Kelurahan yang menyatakan benar suami/istri tidak berada di tempat tinggal terakhir tersebut (jika tidak diketahui alamat jelas/gaib)',
                    'Surat Gugatan / Permohonan pengajuan perceraian yang ditujukan ke Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara',
                    'KETERANGAN : 1. Cerai Gugat : Perceraian diajukan / didaftarkan oleh istri. 2. Cerai Talak : Perceraian diajukan / di daftarkan oleh suami'
                ],
                'slug' => 'cerai-gugat-talak',
                'image' => 'cerai.jpg'
            ],
            [
                'id' => '8',
                'perkara' => 'Mafqud',
                'deskripsi' => "Muhammad Toha Abul 'Ula Kholifah (2005:542) mengatakan bahwa mafqud adalah orang yang hilang dan telah terputus informasi tentang dirinya dan tidak diketahui lagi tempat tinggalnya secara pasti sehingga tidak dapat dipastikan apakah ia masih hidup atau sudah wafat. Dengan demikian, mafqud berarti orang yang hilang.",
                'syarat' => [
                    'FC KTP',
                    'FC Kematian Ahli Waris',
                    'Silsilah yang diketahui oleh Lurah Desa',
                    'Surat pengantar desa setempat mengenai kepergian orang yang dimohonkan mafqud',
                    'Surat Permohonan Mafqud yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'marfuq',
                'image' => 'marfuq.jpg'
            ],
            [
                'id' => '9',
                'perkara' => 'Pembatalan Nikah',
                'deskripsi' => 'Pembatalan perkawinan, yang juga dikenal sebagai fasakh, adalah tindakan pengadilan agama untuk membatalkan ikatan pernikahan. Ini terjadi ketika salah satu pihak atau keduanya tidak memenuhi syarat-syarat yang ditetapkan oleh hukum atau peraturan perundang-undangan. Berdasarkan Pasal 22 UU Perkawinan, perkawinan dapat dibatalkan jika para pihak tidak memenuhi syarat-syarat untuk melangsungkan perkawinan.',
                'syarat' => [
                    'FC KTP Pemohon, Termohon I dan II',
                    'FC Akta Nikah/Duplikat',
                    'FC Akta Nikah yang mau dibatalkan',
                    'Surat Permohonan akan pembatalan nikah yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar panjar biaya perkara'
                ],
                'slug' => 'pembatalan-nikah',
                'image' => 'pembatalan nikah.jpg'
            ],
            [
                'id' => '10',
                'perkara' => 'Dispensasi Nikah',
                'deskripsi' => 'Dispensasi nikah adalah kelonggaran hukum yang diberikan kepada mereka yang ingin menikah, tetapi belum mencapai batas usia pernikahan yang telah ditetapkan oleh pemerintah. Orang tua atau wali anak yang belum cukup umur dapat mengajukan dispensasi nikah ke Pengadilan Agama melalui proses persidangan untuk mendapatkan izin perkawinan.',
                'syarat' => [
                    'FC KTP kedua orang tua yang dimohonkan dispensasi nikah ',
                    'FC Akta Kelahiran anak yang dimohonkan dispensasi nikah ',
                    'FC KTP KEDUA ORANG TUA CALON SUAMI/ISTRI PENGANTIN',
                    'FC KTP atau Akta Kelahiran calon suami/istri ',
                    'FC Kartu Keluarga ',
                    'FC Ijazah Terakhir ',
                    'Surat Keterangan Aktif Sekolah (jika masih sekolah)',
                    'Surat penolakkan dari KUA',
                    'Surat Rekomendasi dari Dinas Kesehatan dan P2TP2A',
                    'Surat Keterangan Masuk ISLAM jika calon suami/istri muallaf',
                    'Surat Permohonan dispensasi nikah yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'dispensasi-nikah',
                'image' => 'dispensasi nikah.jpg'
            ],
            [
                'id' => '11',
                'perkara' => 'Harta Waris',
                'deskripsi' => 'harta peninggalan seseorang setelah meninggal dunia. Dalam hukum peradilan agama di Indonesia, terutama dalam Islam, aturan-aturan waris diatur oleh hukum Islam atau hukum syariah. Proses waris mengikuti prinsip Faraid, yang menentukan bagaimana harta pusaka harus didistribusikan kepada ahli waris sesuai dengan ketentuan agama.',
                'syarat' => [
                    'FC KTP Para Pihak',
                    'FC Sertifikat Hak Milik (SHM) obyek sengketa',
                    'FC Bukti Kepemilikan lainnya (kalau ada) seperti : buku tabungan, akta notaris, dll',
                    'FC Akta Kematian Pewaris',
                    'FC Akta Kelahiran para pewaris',
                    'Silisilah keluarga yang disahkan Kepala Desa/Lurah',
                    'Surat Permohonan yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'harta-waris',
                'image' => 'harta waris.jpg'
            ],
            [
                'id' => '12',
                'perkara' => 'Surat Kuasa Isidentil',
                'deskripsi' => 'surat yang memberikan wewenang kepada seseorang untuk bertindak atas nama pemberi kuasa dalam suatu kegiatan atau urusan tertentu yang bersifat insidental. Surat ini biasanya digunakan dalam situasi di mana pemberi kuasa tidak dapat hadir atau tidak mampu melaksanakan tugas-tugas tertentu sendiri.',
                'syarat' => [
                    'FC KTP kedua belah pihak',
                    'Materai 6000',
                    'Surat Pengantar desa setempat sesuai KTP yang menerangkan posisi hubungan saudara kedua belah pihak',
                    'Kedua belah pihak menghadap pejabat setempat secara langsung (tanda tangan surat kuasa)'
                ],
                'slug' => 'surat-kuasa-isidentil',
                'image' => 'Surat Kuasa Isidentil.jpg'
            ],
            [
                'id' => '13',
                'perkara' => 'Duplikat Akta Cerai',
                'deskripsi' => 'Duplikat akta cerai adalah salinan atau penggantian akta perceraian yang hilang atau rusak diterbitkan sebagai bukti resmi bahwa pihak yang bersangkutan telah bercerai secara hukum.',
                'syarat' => [
                    'Mengisi Blanko Permohonan',
                    'Bukti laporan Kehilangan dari Kepolisian',
                    'Surat pengantar desa setempat yang isinya menerangkan bahwa pihak belum pernah menikah lagi sejak perceraian berlangsung',
                    'FC KTP Pemohon',
                    'FC akta cerai (jika permohonan duplikat disebabkan karena rusak)'
                ],
                'slug' => 'duplikat-akta-cerai',
                'image' => 'Surat Kuasa Isidentil.jpg'
            ],
            [
                'id' => '14',
                'perkara' => 'Perubahan Nama',
                'deskripsi' => 'proses hukum yang memungkinkan seseorang untuk secara resmi mengubah namanya dengan mendapatkan persetujuan dari pengadilan agama.',
                'syarat' => [
                    'FC KTP Para Pemohon',
                    'FC Kartu Keluarga',
                    'FC Surat Nikah',
                    'Surat Keterangan dari Desa tentang satu nama',
                    'Surat Keterangan dari KUA tentang nama yang bersangkutan',
                    'FC Ijazah yang bersangkutan',
                    'Akta Kelahiran yang bersangkutan',
                    'Surat Permohonan yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'perubahan-nama',
                'image' => 'perubahan nama.jpg'
            ],
            [
                'id' => '15',
                'perkara' => 'Perwalian',
                'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan seorang wali untuk anak yang belum dewasa atau seseorang yang dianggap tidak mampu mengurus dirinya sendiri dan/atau hartanya.',
                'syarat' => [
                    'FC KTP Pemohon',
                    'FC Kartu Keluarga',
                    'FC Surat Nikah Pemohon',
                    'FC Akta Kelahiran/Ijazah',
                    'FC Akta Kematian',
                    'Surat Keterangan berkelakuan Baik dari Kepolisian',
                    'Surat Keterangan Berbada Sehat dari PUSKESMAS',
                    'Surat Keterangan Mampu Secara Ekonomi dari Kepala Desa',
                    'Surat Rekomendasi dari Dinas Sosial',
                    'Surat Persetujuan dari Suami/Istri',
                    'Surat Permohonan yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'perwalian',
                'image' => 'perwalian.jpg'
            ],
            [
                'id' => '16',
                'perkara' => 'Penetapan Ahli Waris',
                'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan siapa saja yang berhak menjadi ahli waris dari seseorang yang telah meninggal dunia, serta menentukan bagian masing-masing ahli waris sesuai dengan ketentuan hukum Islam.',
                'syarat' => [
                    'FC KTP Para Pemohon',
                    'FC Kartu Keluarga Pewaris',
                    'FC Kartu Keluarga Orang Tua Pewaris',
                    'FC Kartu Surat Nikah Pewaris',
                    'FC Kartu Surat Nikah Orang Tua Pewaris',
                    'Surat Keterangan Ahli Waris yang diketahui Camat(asli)',
                    'Surat Permohonan penetapan ahli waris yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'penetapan-ahli-waris',
                'image' => 'penetapan ahli waris.jpg'
            ],
            [
                'id' => '17',
                'perkara' => 'Permohonan Asal-Usul Anak',
                'deskripsi' => 'proses hukum di mana seseorang mengajukan permohonan ke pengadilan agama untuk mendapatkan penetapan hukum mengenai asal usul seorang anak.',
                'syarat' => [
                    'FC KTP Para Pemohon',
                    'FC Kartu Keluarga',
                    'FC Surat Nikah Pemohon',
                    'Surat Keterangan Menikah dibawah tangan dari desa',
                    'Surat Kenal Lahir Anak dari desa',
                    'Surat Permohonan yang ditujukan kepada Ketua Pengadilan Agama Amurang',
                    'Membayar Panjar Biaya Perkara'
                ],
                'slug' => 'permohonan-asal-usul-anak',
                'image' => 'permohonan asal usul anak.jpg'
            ]
        ]);
    }

    public static function findBySlug ($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
}