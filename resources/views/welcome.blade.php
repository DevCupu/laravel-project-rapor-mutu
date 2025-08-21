<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Raport Mutu Pendidikan SMKS Wahyu 1 Makassar | Sistem Informasi Pendidikan</title>
    <meta name="description"
        content="Raport Mutu Pendidikan SMK Wahyu Makassar - Sistem informasi komprehensif untuk memantau dan meningkatkan kualitas pendidikan berdasarkan 8 Standar Nasional Pendidikan.">
    <meta name="keywords"
        content="SMK Wahyu Makassar, raport mutu pendidikan, sistem informasi pendidikan, standar nasional pendidikan, kualitas pendidikan, SMK Makassar">
    <meta name="author" content="SMK Wahyu Makassar">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Raport Mutu Pendidikan SMK Wahyu Makassar">
    <meta property="og:description"
        content="Sistem informasi komprehensif untuk memantau dan meningkatkan kualitas pendidikan berdasarkan 8 Standar Nasional Pendidikan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://smkwahyumakassar.sch.id">
    <meta property="og:image" content="https://smkwahyumakassar.sch.id/images/og-image.jpg">
    <meta property="og:site_name" content="SMK Wahyu Makassar">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Raport Mutu Pendidikan SMK Wahyu Makassar">
    <meta name="twitter:description"
        content="Sistem informasi komprehensif untuk memantau dan meningkatkan kualitas pendidikan berdasarkan 8 Standar Nasional Pendidikan.">
    <meta name="twitter:image" content="https://smkwahyumakassar.sch.id/images/twitter-image.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://smkwahyumakassar.sch.id">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" href="{{ asset('logo-smk1.png') }}" type="image/x-icon" />

</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="#home" class="logo">
                    <i class="fas fa-graduation-cap"></i>
                    SMKS Wahyu 1 Makassar
                </a>

                <nav>
                    <ul id="nav-menu">
                        <li><a href="#home" class="active">Beranda</a></li>
                        <li><a href="#articles">Artikel</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </nav>

                <button class="mobile-menu" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content" style="text-align: left; max-width: 800px; margin-left: 0;">
                <h1>Raport Mutu Pendidikan SMKS Wahyu 1 Makassar</h1>
                <p>Sistem informasi komprehensif untuk memantau dan meningkatkan kualitas pendidikan berdasarkan 8
                    Standar Nasional Pendidikan</p>
                <a href="#stats" class="cta-button">Lihat Raport Mutu!</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section stats" id="stats">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Evaluasi Hasil Pencapaian Rapor Mutu Pendidikan SMKS Wahyu 1 Makassar</h2>
                <p class="section-subtitle">Hasil evaluasi Standar Nasional Pendidikan</p>
            </div>

            <div class="stats-charts"
                style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; margin-bottom: 3rem;">
                <!-- CHART 1: Line Chart -->
                <div
                    style="flex:1 1 350px; background: #fff; border-radius: 1rem; box-shadow: 0 4px 24px rgba(124,58,237,0.07); padding: 2rem; min-width:320px;">
                    <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:1rem;">
                        <i class="fas fa-calendar-alt" style="color:#7c3aed;"></i>
                        <h3 style="font-size:1.1rem;font-weight:600;color:#1f2937;">Jumlah Kegiatan per Bulan</h3>
                    </div>
                    <canvas id="monthlyChart" height="220"></canvas>
                </div>


                <!-- CHART 2: Bar Chart (Besar) -->
                <div
                    style="flex:2 1 700px; background: #fff; border-radius: 1rem; box-shadow: 0 4px 24px rgba(124,58,237,0.07); padding: 2rem; min-width:700px; max-width:1000px; overflow-x:auto;">
                    <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:1rem;">
                        <i class="fas fa-coins" style="color:#7c3aed;"></i>
                        <h3 style="font-size:1.1rem;font-weight:600;color:#1f2937;">Total Biaya per Kegiatan Benahi</h3>
                    </div>
                    <div style="min-width:{{ max(700, count($data) * 100) }}px;">
                        <canvas id="lrkraChart" height="200"></canvas>
                    </div>
                </div>

                <!-- CHART 3: Bar Chart Nilai per Kategori -->
                <div
                    style="flex:1 1 350px; background: #fff; border-radius: 1rem; box-shadow: 0 4px 24px rgba(124,58,237,0.07); padding: 2rem; min-width:320px;">
                    <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:1rem;">
                        <i class="fas fa-chart-bar" style="color:#7c3aed;"></i>
                        <h3 style="font-size:1.1rem;font-weight:600;color:#1f2937;">Distribusi Nilai Laporan Rapor per
                            Kategori</h3>
                    </div>
                    <canvas id="raporChart" height="220"></canvas>
                </div>

                <!-- CHART 4: Line Chart Jumlah Laporan Rapor per Tahun -->
                <div
                    style="flex:0 1 350px; background: #fff; border-radius: 0.85rem; box-shadow: 0 2px 12px rgba(124,58,237,0.06); padding: 1.25rem 1rem; min-width:620px; max-width:20px; margin:0 auto;">
                    <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.7rem;">
                        <i class="fas fa-chart-line" style="color:#7c3aed;font-size:1.1rem;"></i>
                        <h3 style="font-size:1rem;font-weight:600;color:#1f2937;line-height:1.2;">Laporan Rapor
                            Pendidikan<br><span style="font-weight:400;color:#6b7280;font-size:0.93rem;">per
                                Tahun</span></h3>
                    </div>
                    <canvas id="raporTahunChart" height="140" style="max-width:100%;"></canvas>
                </div>

                <div class="insight-box"
                    style="
                        background: linear-gradient(135deg, #ede9fe 0%, #f3f4f6 100%);
                        padding: 2rem 2.5rem;
                        border-radius: 1.25rem;
                        margin: 2.5rem auto 0 auto;
                        max-width: 820px;
                        box-shadow: 0 6px 32px rgba(124,58,237,0.08), 0 1.5px 6px rgba(0,0,0,0.03);
                        display: flex;
                        align-items: flex-start;
                        gap: 1.5rem;
                        position: relative;
                        overflow: hidden;
                    ">
                    <div
                        style="
                        flex-shrink: 0;
                        width: 3.5rem;
                        height: 3.5rem;
                        background: linear-gradient(135deg, #a78bfa 0%, #7c3aed 100%);
                        border-radius: 1rem;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        box-shadow: 0 2px 8px rgba(124,58,237,0.10);
                        margin-top: 0.25rem;
                    ">
                        <i class="fas fa-lightbulb" style="color:#fff;font-size:1.6rem;"></i>
                    </div>
                    <div>
                        <h3
                            style="color: #1f2937; font-weight: 700; font-size: 1.25rem; margin-bottom: 0.7rem; letter-spacing: -0.5px;">
                            Insight Otomatis
                        </h3>
                        <ul
                            style="
                            color: #374151;
                            font-size: 1.07rem;
                            line-height: 1.8;
                            padding-left: 1.2rem;
                            list-style: disc;
                            margin: 0;
                        ">
                            <li>
                                <strong>Rencana Kegiatan:</strong>
                                <span>{!! $insightRKT !!}</span>
                            </li>
                            <li>
                                <strong>Rapor Mutu:</strong>
                                <span>{!! $insightRapor !!}</span>
                            </li>
                            @if (!empty($insightMasalah))
                                <li>
                                    <strong>Catatan & Masalah:</strong>
                                    <span>{!! $insightMasalah !!}</span>
                                </li>
                            @endif
                            <li>
                                <strong>Kegiatan Paling Banyak dibiayai:</strong>
                                <span>{!! $insightBiaya !!}</span>
                            </li>
                            {{-- Tambahkan insight lain di sini --}}
                        </ul>
                        <div
                            style="margin-top:1.5rem; background:#f5f3ff; border-radius:0.7rem; padding:1.1rem 1.3rem; color:#5b21b6; font-size:1rem;">
                            <strong>Apa itu Insight Otomatis?</strong>
                            <br>
                            Insight otomatis adalah rangkuman analisis data yang dihasilkan secara otomatis dari data
                            raport mutu dan rencana kegiatan sekolah. Bagian ini membantu sekolah dalam memahami tren,
                            pencapaian, serta potensi masalah yang perlu diperhatikan, sehingga pengambilan keputusan
                            dan perencanaan perbaikan mutu pendidikan dapat dilakukan secara lebih cepat dan tepat.
                            ><</span>
                        </div>

                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    @php use Carbon\Carbon; @endphp
                    <script>
                        // Warna-warna utama untuk konsistensi visual
                        const mainColors = [
                            '#7c3aed', // ungu tua
                            '#22d3ee', // biru muda
                            '#f59e42', // oranye
                            '#10b981', // hijau
                            '#ef4444', // merah
                            '#fbbf24', // kuning
                            '#6366f1', // biru keunguan
                            '#a78bfa', // ungu muda
                            '#f472b6', // pink
                            '#0ea5e9', // biru terang
                        ];

                        // Chart 1: Line Chart Jumlah Kegiatan per Bulan
                        new Chart(document.getElementById('monthlyChart'), {
                            type: 'line',
                            data: {
                                labels: {!! json_encode($monthlyData->pluck('bulan')->map(fn($b) => Carbon::create()->month($b)->translatedFormat('F'))) !!},
                                datasets: [{
                                    label: 'Jumlah Kegiatan',
                                    data: {!! json_encode($monthlyData->pluck('jumlah_kegiatan')) !!},
                                    borderColor: mainColors[0],
                                    backgroundColor: 'rgba(34,211,238,0.15)', // biru muda transparan
                                    pointBackgroundColor: mainColors[1],
                                    pointBorderColor: mainColors[0],
                                    pointRadius: 6,
                                    fill: true,
                                    tension: 0.4
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: {
                                            color: '#e5e7eb'
                                        }
                                    },
                                    x: {
                                        grid: {
                                            color: '#f3f4f6'
                                        }
                                    }
                                }
                            }
                        });

                        // Chart 2: Bar Chart Total Biaya per Kegiatan Benahi
                        new Chart(document.getElementById('lrkraChart'), {
                            type: 'bar',
                            data: {
                                labels: {!! json_encode($data->pluck('kegiatan_benahi')) !!},
                                datasets: [{
                                    label: 'Total Biaya',
                                    data: {!! json_encode($data->pluck('total_biaya')) !!},
                                    backgroundColor: {!! json_encode(
                                        $data->pluck('kegiatan_benahi')->map(function ($_, $i) use ($data) {
                                            $palette = [
                                                '#7c3aed',
                                                '#22d3ee',
                                                '#f59e42',
                                                '#10b981',
                                                '#ef4444',
                                                '#fbbf24',
                                                '#6366f1',
                                                '#a78bfa',
                                                '#f472b6',
                                                '#0ea5e9',
                                            ];
                                            return $palette[$i % count($palette)];
                                        }),
                                    ) !!},
                                    borderColor: '#fff',
                                    borderWidth: 2
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },
                                responsive: true,
                                scales: {
                                    y: {
                                        beginAtZero: true,
                                        grid: {
                                            color: '#e5e7eb'
                                        },
                                        ticks: {
                                            callback: function(value) {
                                                return 'Rp ' + value.toLocaleString('id-ID');
                                            }
                                        }
                                    },
                                    x: {
                                        grid: {
                                            color: '#f3f4f6'
                                        }
                                    }
                                }
                            }
                        });
                    </script>

                    @php
                        // Ambil semua kategori unik dari data raporChart
                        $kategoriLabels = collect($raporChart)->pluck('kategori')->unique()->values();
                        // Ambil semua nilai unik dari data raporChart
                        $nilaiList = collect($raporChart)->pluck('nilai')->unique()->values();
                        // Warna untuk setiap nilai, disesuaikan dengan tema utama
                        $warnaNilai = [
                            'Baik' => '#10b981', // hijau
                            'Sedang' => '#fbbf24', // kuning
                            'Rendah' => '#ef4444', // merah
                        ];
                    @endphp

                    <script>
                        // Data untuk Chart 3: Distribusi Nilai per Kategori
                        const raporData = @json($raporChart);
                        const labelsRapor = @json($kategoriLabels);
                        const nilaiList = @json($nilaiList);
                        const warnaNilai = @json($warnaNilai);

                        // Siapkan struktur data jumlah per kategori per nilai
                        const kategoriNilai = {};
                        labelsRapor.forEach(kat => {
                            kategoriNilai[kat] = {};
                            nilaiList.forEach(nilai => {
                                kategoriNilai[kat][nilai] = 0;
                            });
                        });

                        // Isi jumlah sesuai data
                        raporData.forEach(item => {
                            kategoriNilai[item.kategori][item.nilai] = item.jumlah;
                        });

                        // Siapkan datasets untuk Chart.js
                        const datasetsRapor = nilaiList.map(nilai => ({
                            label: nilai,
                            data: labelsRapor.map(kat => kategoriNilai[kat][nilai] || 0),
                            backgroundColor: warnaNilai[nilai] || '#0ea5e9'
                        }));

                        new Chart(document.getElementById('raporChart'), {
                            type: 'bar',
                            data: {
                                labels: labelsRapor,
                                datasets: datasetsRapor
                            },
                            options: {
                                responsive: true,
                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'top'
                                    },
                                    title: {
                                        display: true,
                                        text: 'Distribusi Nilai Rapor Mutu per Kategori',
                                        font: {
                                            size: 16
                                        }
                                    },
                                    tooltip: {
                                        mode: 'index',
                                        intersect: false,
                                        callbacks: {
                                            label: function(context) {
                                                return `${context.dataset.label}: ${context.parsed.y} indikator`;
                                            }
                                        }
                                    }
                                },
                                scales: {
                                    x: {
                                        stacked: true,
                                        title: {
                                            display: true,
                                            text: 'Kategori'
                                        },
                                        grid: {
                                            color: '#e5e7eb'
                                        }
                                    },
                                    y: {
                                        stacked: true,
                                        beginAtZero: true,
                                        title: {
                                            display: true,
                                            text: 'Jumlah Indikator'
                                        },
                                        ticks: {
                                            precision: 0
                                        },
                                        grid: {
                                            color: '#e5e7eb'
                                        }
                                    }
                                }
                            }
                        });

                        // CHART 4: Line Chart Per Tahun
                        const raporTahun = @json($raporPerTahun);
                        const tahunLabels = raporTahun.map(item => item.tahun);
                        const totalPerTahun = raporTahun.map(item => item.total);

                        new Chart(document.getElementById('raporTahunChart'), {
                            type: 'line',
                            data: {
                                labels: tahunLabels,
                                datasets: [{
                                    label: 'Jumlah Indikator',
                                    data: totalPerTahun,
                                    fill: true,
                                    borderColor: mainColors[2],
                                    backgroundColor: 'rgba(245,158,66,0.13)', // oranye transparan
                                    tension: 0.4,
                                    pointBackgroundColor: mainColors[2],
                                    pointBorderColor: '#fff',
                                    pointRadius: 6
                                }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        text: 'Tren Jumlah Indikator Rapor Mutu per Tahun',
                                        font: {
                                            size: 16
                                        }
                                    },
                                    tooltip: {
                                        callbacks: {
                                            label: function(context) {
                                                return `Jumlah: ${context.parsed.y}`;
                                            }
                                        }
                                    }
                                },
                                responsive: true,
                                scales: {
                                    x: {
                                        title: {
                                            display: true,
                                            text: 'Tahun'
                                        },
                                        grid: {
                                            color: '#f3f4f6'
                                        }
                                    },
                                    y: {
                                        beginAtZero: true,
                                        title: {
                                            display: true,
                                            text: 'Jumlah Indikator'
                                        },
                                        ticks: {
                                            stepSize: 1,
                                            precision: 0
                                        },
                                        grid: {
                                            color: '#e5e7eb'
                                        }
                                    }
                                }
                            }
                        });
                    </script>

    </section>


    <!-- Articles Section -->
    <section class="section articles" id="articles">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Artikel & Berita</h2>
                <p class="section-subtitle">Informasi terkini seputar pendidikan dan pencapaian SMK Wahyu Makassar</p>
            </div>

            <div class="articles-grid" id="articles-container">
                @foreach ($articles as $article)
                    <div class="article-card" style="max-width:500px; margin:auto;">
                        @if ($article->thumbnail)
                            <img src="{{ asset('storage/' . $article->thumbnail) }}"
                                style="width:100%;height:160px;object-fit:cover;object-position:center;display:block;border-radius:0.5rem 0.5rem 0 0;"
                                alt="{{ $article->title }}">
                        @else
                            <div
                                style="height:160px;display:flex;align-items:center;justify-content:center;background:#f3f4f6;">
                                <x-heroicon-o-newspaper style="width:2.5rem;height:2.5rem;color:#9ca3af;" />
                            </div>
                        @endif

                        <div style="padding:1rem;">
                            <div
                                style="display:flex;flex-wrap:wrap;gap:0.75rem;font-size:0.85rem;color:#9ca3af;margin-bottom:0.5rem;">
                                <span>📅
                                    {{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('d F Y') }}</span>
                                <span>👤 {{ $article->author }}</span>
                                <span>🏷️ {{ $article->category }}</span>
                            </div>
                            <h3 style="font-weight:600;font-size:1.05rem;color:#1f2937;margin-bottom:0.5rem;">
                                {{ $article->title }}</h3>
                            <p style="font-size:0.95rem;color:#6b7280;margin-bottom:0.75rem;">
                                {{ Str::limit(strip_tags($article->content), 100) }}</p>
                            <a href="{{ route('articles.show', $article->id) }}"
                                style="font-size:0.95rem;color:#7c3aed;text-decoration:none;font-weight:500;">Baca
                                Selengkapnya →</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>SMK Wahyu Makassar</h3>
                    <p>Menyediakan pendidikan berkualitas dengan sistem raport mutu yang komprehensif untuk
                        mempersiapkan generasi masa depan yang kompeten dan berdaya saing.</p>
                </div>

                <div class="footer-section">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#stats">Statistik</a></li>
                        <li><a href="#features">Fitur</a></li>
                        <li><a href="#articles">Artikel</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Program Keahlian</h3>
                    <ul>
                        <li><a href="#">Teknik Komputer & Jaringan</a></li>
                        <li><a href="#">Rekayasa Perangkat Lunak</a></li>
                        <li><a href="#">Multimedia</a></li>
                        <li><a href="#">Akuntansi</a></li>
                        <li><a href="#">Administrasi Perkantoran</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Informasi</h3>
                    <ul>
                        <li><a href="#">Penerimaan Siswa Baru</a></li>
                        <li><a href="#">Beasiswa</a></li>
                        <li><a href="#">Kalender Akademik</a></li>
                        <li><a href="#">Fasilitas</a></li>
                        <li><a href="#">Kerjasama Industri</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 SMK Wahyu Makassar. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu functionality
        const mobileMenu = document.getElementById('mobile-menu');
        const navMenu = document.getElementById('nav-menu');

        mobileMenu.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            const icon = mobileMenu.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Close mobile menu if open
                    navMenu.classList.remove('active');
                    mobileMenu.querySelector('i').classList.remove('fa-times');
                    mobileMenu.querySelector('i').classList.add('fa-bars');
                }
            });
        });

        // Active navigation highlighting
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('nav a[href^="#"]');

            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                if (window.pageYOffset >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Load articles
        function loadArticles() {
            const container = document.getElementById('articles-container');

            articles.forEach(article => {
                const articleCard = document.createElement('div');
                articleCard.className = 'article-card';

                articleCard.innerHTML = `
                    <div class="article-image">
                        <i class="fas fa-newspaper" style="font-size: 2rem;"></i>
                    </div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span><i class="fas fa-calendar"></i> ${formatDate(article.date)}</span>
                            <span><i class="fas fa-user"></i> ${article.author}</span>
                            <span><i class="fas fa-tag"></i> ${article.category}</span>
                        </div>
                        <h3 class="article-title">
                            <a href="#" onclick="openArticle(${article.id})">${article.title}</a>
                        </h3>
                        <p class="article-excerpt">${article.excerpt}</p>
                        <a href="#" onclick="openArticle(${article.id})" class="read-more">Baca Selengkapnya →</a>
                    </div>
                `;

                container.appendChild(articleCard);
            });
        }

        // Format date function
        function formatDate(dateString) {
            const options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        }

        // Open article function
        function openArticle(id) {
            const article = articles.find(a => a.id === id);
            if (article) {
                alert(
                    `Membuka artikel: "${article.title}"\n\nIni adalah demo. Dalam implementasi nyata, artikel akan dibuka di halaman terpisah atau modal.`
                );
            }
        }

        // Contact form submission
        document.getElementById('contact-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Simulate form submission
            alert('Pesan Anda telah dikirim! Kami akan menghubungi Anda segera.');
            this.reset();
        });

        // Initialize page
        document.addEventListener('DOMContentLoaded', function() {
            loadArticles();
        });

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');

            counters.forEach(counter => {
                const target = parseInt(counter.textContent);
                let count = 0;
                const increment = target / 100;

                const timer = setInterval(() => {
                    count += increment;
                    if (count >= target) {
                        counter.textContent = target + '%';
                        clearInterval(timer);
                    } else {
                        counter.textContent = Math.ceil(count) + '%';
                    }
                }, 20);
            });
        }

        // Trigger counter animation when stats section is visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });

        const statsSection = document.querySelector('.stats');
        if (statsSection) {
            observer.observe(statsSection);
        }
    </script>
</body>

</html>
