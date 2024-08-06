<?php

$posts = 
[
    [
        'id' => '1',
        'perkara' => 'Pengangkatan Anak',
        'deskripsi' => 'Perubahan yang terjadi adalah pemindahan tanggung jawab pemeliharaan dan pengawasan dari orang tua asli kepada orang tua angkat, tetapi status anak angkat tetap sebagai anak kandung',
        'syarat' => [
            'FC KTP Penggung dan anak angkat',
            'FC Surat Nikah Penggung',
            'FC Akta Kelahiran anak angkat',
            'FC Kartu Keluarga anak angkat',
            'Surat Keterangan Penghasilan dan pengasuhan anak dari Desa/Lurah',
            'FC Surat pernyataan dari orang tua',
            'Surat Izin dari orang tua kandung yang disahkan oleh lurah/desa',
            'Surat Keterangan lain yang diperlukan',
            'Membayar panjar biaya perkara'
        ],
        'slug' => 'pengangkatan-anak'
    ],
    [
        'id' => '2',
        'perkara' => 'Hak Asu Anak',
        'deskripsi' => 'Hak asuh anak menurut pengadilan agama adalah hak dan kewajiban yang diberikan kepada salah satu atau kedua orang tua untuk merawat, mendidik, dan menjaga anak-anak setelah terjadi perceraian atau perpisahan.',
        'syarat' => [
            'FC Akta Kelahiran Anak',
            'FC KTP Pemohon',
            'FC Surat Nikah Pemohon',
            'FC Kartu Keluarga',
            'Surat Keterangan dari lurah/desa',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'hak-asu-anak'
    ],
    [
        'id' => '3',
        'perkara' => "Wali A'dhal",
        'deskripsi' => 'merujuk kepada wali yang enggan atau menolak memberikan izin pernikahan bagi seorang wanita yang berada di bawah perwaliannya tanpa alasan yang sah atau dibenarkan oleh syariat Islam.',
        'syarat' => [
            'FC KTP Pemohon',
            'FC Surat Keterangan dari KUA',
            'FC Akta Kelahiran',
            'Surat Permohonan Walidhol',
            'Surat Pengantar dari Kepala Desa',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'wali-adhal'
    ],
    [
        'id' => '4',
        'perkara' => 'Harta Bersama/Harta Gono Gini',
        'deskripsi' => 'harta yang diperoleh oleh pasangan suami istri selama pernikahan berlangsung. Harta ini mencakup semua jenis aset dan properti yang didapatkan oleh kedua belah pihak setelah pernikahan, tanpa memperhitungkan siapa yang secara langsung membeli atau mendapatkan aset tersebut.',
        'syarat' => [
            'FC KTP Para Pihak',
            'FC Sertifikat Hak Milik (SHM) obyek sengketa',
            'FC Bukti Kepemilikan tanah (ajb, sporadik)',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'harta-bersama-harta-gono-gini'
    ],
    [
        'id' => '5',
        'perkara' => 'Poligami',
        'deskripsi' => 'praktik di mana seorang pria menikahi lebih dari satu wanita pada waktu yang sama, sesuai dengan hukum Islam dan peraturan yang berlaku di Indonesia.',
        'syarat' => [
            'FC KTP Pemohon dan Istri',
            'FC Surat Nikah',
            'Surat Keterangan Penghasilan',
            'FC Akta Kelahiran Anak',
            'Surat Persetujuan dari Istri yang diketahui Kepala Desa/Lurah',
            'Surat Keterangan lain yang diperlukan',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'poligami'
    ],
    [
        'id' => '6',
        'perkara' => 'Pengesahan Nikah (Istibat Nikah)',
        'deskripsi' => 'proses hukum untuk mengesahkan pernikahan yang telah dilaksanakan secara agama tetapi belum tercatat atau diakui secara resmi oleh negara.',
        'syarat' => [
            'FC KTP Suami Istri',
            'FC Akta Nikah',
            'FC Akta Kelahiran Anak',
            'Surat Keterangan dari Kepala Desa/Lurah',
            'Surat Pengantar dari KUA',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'pengesahan-nikah-istibat-nikah'
    ],
    [
        'id' => '7',
        'perkara' => 'Cerai Gugat/Talak',
        'deskripsi' => 'Cerai gugat adalah perceraian yang diajukan oleh pihak istri terhadap suami. Proses ini disebut "gugatan cerai" dan dilakukan melalui pengadilan agama.',
        'syarat' => [
            'FC KTP Pemohon',
            'FC Akta Nikah Pemohon',
            'FC Kartu Keluarga Pemohon',
            'FC Akta Kelahiran Anak',
            'Surat Keterangan dari lurah/desa',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Surat Keterangan Penghasilan',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'cerai-gugat-talak'
    ],
    [
        'id' => '8',
        'perkara' => 'Marfuq',
        'deskripsi' => 'Marfuq adalah istilah yang digunakan dalam hukum Islam untuk merujuk pada seseorang yang telah meninggal dunia. Dalam konteks Pengadilan Agama, terdapat berbagai jenis permohonan yang berkaitan dengan hukum Islam dan perkara di tingkat pertama antara orang-orang yang beragama Islam.',
        'syarat' => [],
        'slug' => 'marfuq'
    ],
    [
        'id' => '9',
        'perkara' => 'Pembatalan Nikah',
        'deskripsi' => 'Pembatalan perkawinan, yang juga dikenal sebagai fasakh, adalah tindakan pengadilan agama untuk membatalkan ikatan pernikahan. Ini terjadi ketika salah satu pihak atau keduanya tidak memenuhi syarat-syarat yang ditetapkan oleh hukum atau peraturan perundang-undangan. Berdasarkan Pasal 22 UU Perkawinan, perkawinan dapat dibatalkan jika para pihak tidak memenuhi syarat-syarat untuk melangsungkan perkawinan.',
        'syarat' => [
            'FC KTP Pemohon, Termohon I dan II',
            'FC Akta Nikah yang Dibatalkan',
            'FC Kartu Keluarga',
            'Surat Pengantar permohonan pembatalan nikah',
            'Membayar biaya perkara kepada Ketua Pengadilan Agama Amurang'
        ],
        'slug' => 'pembatalan-nikah'
    ],
    [
        'id' => '10',
        'perkara' => 'Dispensasi Nikah',
        'deskripsi' => 'Dispensasi nikah adalah kelonggaran hukum yang diberikan kepada mereka yang ingin menikah, tetapi belum mencapai batas usia pernikahan yang telah ditetapkan oleh pemerintah. Orang tua atau wali anak yang belum cukup umur dapat mengajukan dispensasi nikah ke Pengadilan Agama melalui proses persidangan untuk mendapatkan izin perkawinan.',
        'syarat' => [
            'FC KTP kedua orang tua yang dimohonkan dispensasi nikah',
            'FC KTP anak yang dimohonkan dispensasi nikah',
            'Surat Keterangan Pengantar dari kelurahan (domisili)',
            'FC Akta Kelahiran anak',
            'FC Kartu Keluarga orang tua dan anak yang dimohonkan dispensasi nikah',
            'Surat Pernyataan orang tua anak yang disahkan oleh lurah/desa',
            'Surat Keterangan Kesehatan dan Narkoba dari rumah sakit',
            'Surat Keterangan lain yang diperlukan',
            'Surat Pernyataan dari Kepala Desa/Lurah',
            'Surat Izin dari Orang Tua/Wali',
            'Surat Persetujuan dari Calon Mempelai',
            'Surat Pengantar dari KUA',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'dispensasi-nikah'
    ],
    [
        'id' => '11',
        'perkara' => 'Harta Waris',
        'deskripsi' => 'harta peninggalan seseorang setelah meninggal dunia. Dalam hukum peradilan agama di Indonesia, terutama dalam Islam, aturan-aturan waris diatur oleh hukum Islam atau hukum syariah. Proses waris mengikuti prinsip Faraid, yang menentukan bagaimana harta pusaka harus didistribusikan kepada ahli waris sesuai dengan ketentuan agama.',
        'syarat' => [
            'FC KTP Para Pihak',
            'FC Sertifikat Hak Milik (SHM) obyek sengketa',
            'FC Bukti Kepemilikan tanah (ajb, sporadik)',
            'FC Akta Kelahiran pewaris',
            'Surat Kematian pewaris',
            'Silisilah keluarga pewaris',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'harta-waris'
    ],
    [
        'id' => '12',
        'perkara' => 'Surat Kuasa Isidentil',
        'deskripsi' => 'surat yang memberikan wewenang kepada seseorang untuk bertindak atas nama pemberi kuasa dalam suatu kegiatan atau urusan tertentu yang bersifat insidental. Surat ini biasanya digunakan dalam situasi di mana pemberi kuasa tidak dapat hadir atau tidak mampu melaksanakan tugas-tugas tertentu sendiri.',
        'syarat' => [
            'FC KTP Pemberi Kuasa',
            'FC KTP Penerima Kuasa',
            'Surat Pernyataan Pemberi Kuasa yang disahkan oleh lurah/desa',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'surat-kuasa-isidentil'
    ],
    [
        'id' => '13',
        'perkara' => 'Duplikat Akta Cerai',
        'deskripsi' => 'Duplikat akta cerai adalah salinan atau penggantian akta perceraian yang hilang atau rusak diterbitkan sebagai bukti resmi bahwa pihak yang bersangkutan telah bercerai secara hukum.',
        'syarat' => [
            'FC KTP Pemohon',
            'Surat Pernyataan Kehilangan dari Kepolisian',
            'Surat Keterangan dari KUA',
            'Surat Keterangan dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'duplikat-akta-cerai'
    ],
    [
        'id' => '14',
        'perkara' => 'Perubahan Nama',
        'deskripsi' => 'proses hukum yang memungkinkan seseorang untuk secara resmi mengubah namanya dengan mendapatkan persetujuan dari pengadilan agama.',
        'syarat' => [
            'FC KTP Pemohon',
            'FC Kartu Keluarga',
            'FC Akta Kelahiran',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Surat Keterangan dari lurah/desa',
            'Surat Pernyataan dari Kepala Desa/Lurah',
            'Surat Keterangan lain yang diperlukan',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'perubahan-nama'
    ],
    [
        'id' => '15',
        'perkara' => 'Perwalian',
        'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan seorang wali untuk anak yang belum dewasa atau seseorang yang dianggap tidak mampu mengurus dirinya sendiri dan/atau hartanya.',
        'syarat' => [
            'FC KTP Pemohon',
            'FC Akta Kelahiran Anak',
            'FC Kartu Keluarga Pemohon',
            'Surat Keterangan dari lurah/desa',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'perwalian'
    ],
    [
        'id' => '16',
        'perkara' => 'Penetapan Ahli Waris',
        'deskripsi' => 'proses hukum di mana pengadilan agama menetapkan siapa saja yang berhak menjadi ahli waris dari seseorang yang telah meninggal dunia, serta menentukan bagian masing-masing ahli waris sesuai dengan ketentuan hukum Islam.',
        'syarat' => [
            'FC KTP Para Pihak',
            'FC Sertifikat Hak Milik (SHM) obyek sengketa',
            'FC Bukti Kepemilikan tanah (ajb, sporadik)',
            'Surat Kematian pewaris',
            'Silisilah keluarga pewaris',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'penetapan-ahli-waris'
    ],
    [
        'id' => '17',
        'perkara' => 'Permohonan Asal-Usul Anak',
        'deskripsi' => 'proses hukum di mana seseorang mengajukan permohonan ke pengadilan agama untuk mendapatkan penetapan hukum mengenai asal usul seorang anak.',
        'syarat' => [
            'FC KTP Pemohon',
            'FC Akta Kelahiran Anak',
            'FC Surat Nikah',
            'Surat Keterangan dari lurah/desa',
            'Surat Pengantar dari Kepala Desa/Lurah',
            'Membayar Panjar Biaya Perkara'
        ],
        'slug' => 'permohonan-asal-usul-anak'
    ],
];