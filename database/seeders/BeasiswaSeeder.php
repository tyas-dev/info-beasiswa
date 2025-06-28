<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;
use Illuminate\Support\Facades\DB;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengosongkan tabel sebelum diisi untuk menghindari duplikasi
        DB::table('beasiswas')->truncate();

        // Array berisi 10 data beasiswa lengkap
        $beasiswas = [
            [
                'nama_beasiswa' => 'Beasiswa Prestasi Akademik 2025',
                'penyelenggara' => 'Yayasan Cendekia Bangsa',
                'deskripsi' => "Diberikan kepada mahasiswa S1 semester 3 hingga 7 yang memiliki Indeks Prestasi Kumulatif (IPK) yang unggul.",
                'syarat' => "1. Mahasiswa aktif S1 semester 3-7.\n2. IPK minimal 3.50.\n3. Melampirkan transkrip nilai terakhir.\n4. Membuat esai tentang rencana masa depan.",
                'gambar_url' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'S1', 'tanggal_buka' => '2025-07-01', 'tanggal_tutup' => '2025-08-31', 'link_pendaftaran' => 'https://ugm.ac.id/beasiswa'
            ],
            [
                'nama_beasiswa' => 'Program Generasi Gigih 3.0',
                'penyelenggara' => 'GoTo Impact Foundation',
                'deskripsi' => "Program pelatihan intensif bagi mahasiswa tingkat akhir dan fresh graduate di bidang teknologi (Backend, Frontend, Data Analyst).",
                'syarat' => "1. Mahasiswa tingkat akhir atau lulusan baru (maks. 2 tahun).\n2. Berasal dari jurusan IT atau memiliki proyek portofolio.\n3. Bersedia mengikuti program secara penuh waktu.\n4. Lolos tes logika dan pemrograman dasar.",
                'gambar_url' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'S1', 'tanggal_buka' => '2025-06-15', 'tanggal_tutup' => '2025-07-30', 'link_pendaftaran' => 'https://www.goto-impact.org/'
            ],
            [
                'nama_beasiswa' => 'Beasiswa Riset S2 Luar Negeri',
                'penyelenggara' => 'Kementerian Pendidikan Tinggi',
                'deskripsi' => "Beasiswa penuh untuk studi S2 di universitas top 100 dunia bagi WNI yang memiliki proposal riset yang relevan dengan pembangunan nasional.",
                'syarat' => "1. Warga Negara Indonesia.\n2. Telah menyelesaikan studi S1/D4.\n3. Memiliki LoA Unconditional dari universitas tujuan.\n4. Skor TOEFL iBT minimal 94 atau IELTS 7.0.",
                'gambar_url' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'S2', 'tanggal_buka' => '2025-08-01', 'tanggal_tutup' => '2025-10-15', 'link_pendaftaran' => 'https://beasiswa.kemdikbud.go.id/'
            ],
            [
                'nama_beasiswa' => 'Beasiswa Keahlian Digital SMK',
                'penyelenggara' => 'Yayasan Tech-Indonesia',
                'deskripsi' => 'Program beasiswa intensif untuk siswa/i SMK jurusan RPL, TKJ, dan Multimedia untuk mendalami skill digital modern seperti UI/UX Design dan Cloud Computing.',
                'syarat' => "1. Siswa/i aktif kelas XI atau XII.\n2. Jurusan RPL, TKJ, atau Multimedia.\n3. Memiliki semangat belajar tinggi di bidang digital.\n4. Melampirkan surat rekomendasi dari kepala sekolah.",
                'gambar_url' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'SMA/SMK', 'tanggal_buka' => '2025-06-01', 'tanggal_tutup' => '2025-07-15', 'link_pendaftaran' => 'https://www.techindonesia.org/beasiswa'
            ],
            [
                'nama_beasiswa' => 'Indonesia Bangkit Scholarship',
                'penyelenggara' => 'Lembaga Pengelola Dana Pendidikan (LPDP)',
                'deskripsi' => 'Beasiswa afirmasi untuk putra-putri daerah tertinggal, terdepan, dan terluar (3T) untuk melanjutkan studi S1 di dalam negeri.',
                'syarat' => "1. WNI dari daerah afirmasi LPDP.\n2. Lulusan SMA/SMK sederajat.\n3. Tidak sedang menempuh studi (on-going).\n4. Bersedia kembali dan mengabdi di daerah asal.",
                'gambar_url' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=1532&auto=format&fit=crop',
                'jenjang' => 'S1', 'tanggal_buka' => '2025-09-01', 'tanggal_tutup' => '2025-11-30', 'link_pendaftaran' => 'https://lpdp.kemenkeu.go.id/'
            ],
            [
                'nama_beasiswa' => 'Beasiswa Olahraga Nasional',
                'penyelenggara' => 'Kementerian Pemuda dan Olahraga',
                'deskripsi' => 'Diberikan kepada atlet-atlet berprestasi tingkat nasional maupun internasional untuk menunjang pendidikan formal mereka.',
                'syarat' => "1. Atlet berprestasi dengan medali emas/perak/perunggu.\n2. Terdaftar sebagai mahasiswa aktif.\n3. Mendapat rekomendasi dari induk cabang olahraga.",
                'gambar_url' => 'https://images.unsplash.com/photo-1579952363873-27f3bade9f55?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'S1', 'tanggal_buka' => '2025-07-10', 'tanggal_tutup' => '2025-08-20', 'link_pendaftaran' => 'https://kemenpora.go.id/'
            ],
            [
                'nama_beasiswa' => 'Beasiswa Seni dan Budaya',
                'penyelenggara' => 'Yayasan Kelola',
                'deskripsi' => 'Dukungan dana untuk seniman muda, penulis, dan pekerja budaya untuk menciptakan karya atau melakukan residensi.',
                'syarat' => "1. Berusia 18-35 tahun.\n2. Memiliki portofolio karya di bidang seni/budaya.\n3. Mengajukan proposal kegiatan yang jelas dan terukur.",
                'gambar_url' => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?q=80&w=1471&auto=format&fit=crop',
                'jenjang' => 'D3', 'tanggal_buka' => '2025-08-15', 'tanggal_tutup' => '2025-09-30', 'link_pendaftaran' => 'https://kelola.or.id/'
            ],
            [
                'nama_beasiswa' => 'Beasiswa Kedokteran Afirmasi',
                'penyelenggara' => 'Kementerian Kesehatan',
                'deskripsi' => 'Program beasiswa untuk calon mahasiswa kedokteran dari daerah terpencil dengan ikatan dinas setelah lulus.',
                'syarat' => "1. Lulusan SMA/MA jurusan IPA.\n2. Berasal dari Daerah Tertinggal, Perbatasan, dan Kepulauan (DTPK).\n3. Lulus seleksi masuk Perguruan Tinggi Kedokteran.",
                'gambar_url' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'S1', 'tanggal_buka' => '2025-07-20', 'tanggal_tutup' => '2025-09-10', 'link_pendaftaran' => 'https://www.kemkes.go.id/'
            ],
            [
                'nama_beasiswa' => 'Program Magister Teknik Elektro',
                'penyelenggara' => 'Institut Teknologi Bandung (ITB)',
                'deskripsi' => 'Beasiswa S2 penuh bagi lulusan S1 Teknik Elektro dengan IPK cumlaude dari universitas terakreditasi A.',
                'syarat' => "1. Lulusan S1 Teknik Elektro/serumpun.\n2. IPK minimal 3.50.\n3. Lulus ujian saringan masuk ITB.\n4. Memiliki sertifikat TPA Bappenas.",
                'gambar_url' => 'https://images.unsplash.com/photo-1496065187959-7f07b8353c55?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'S2', 'tanggal_buka' => '2025-09-05', 'tanggal_tutup' => '2025-10-25', 'link_pendaftaran' => 'https://www.itb.ac.id/penerimaan/pascasarjana'
            ],
            [
                'nama_beasiswa' => 'Future Leaders Scholarship for PhD',
                'penyelenggara' => 'Global Education Foundation',
                'deskripsi' => 'Beasiswa S3 di bidang Sains, Teknologi, Teknik, dan Matematika (STEM) di universitas-universitas di Eropa.',
                'syarat' => "1. Lulusan S2 dengan predikat sangat memuaskan.\n2. Memiliki proposal disertasi yang disetujui promotor.\n3. Pengalaman riset dan publikasi menjadi nilai tambah.",
                'gambar_url' => 'https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1470&auto=format&fit=crop',
                'jenjang' => 'S3', 'tanggal_buka' => '2025-10-01', 'tanggal_tutup' => '2025-12-31', 'link_pendaftaran' => null
            ],
        ];

        // Memasukkan setiap data ke dalam database
        foreach ($beasiswas as $beasiswa) {
            Beasiswa::create($beasiswa);
        }
    }
}