<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport Mutu Pendidikan - SMK Wahyu Makassar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6a1b9a;
            --primary-light: #9c4dcc;
            --primary-dark: #38006b;
            --secondary: #e1bee7;
            --text-dark: #333333;
            --text-light: #ffffff;
            --background: #f9f9f9;
            --gray-light: #f1f1f1;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-dark);
            background-color: var(--background);
            line-height: 1.6;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            background-color: var(--primary);
            color: var(--text-light);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 1.8rem;
        }
        
        .nav-menu {
            display: flex;
        }
        
        .nav-menu li {
            margin-left: 30px;
        }
        
        .nav-menu a {
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover {
            color: var(--secondary);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--text-light);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--text-light);
            padding: 150px 0 100px;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            background-color: var(--text-light);
            color: var(--primary);
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid transparent;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--text-light);
            color: var(--text-light);
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background-color: var(--text-light);
            color: var(--primary);
        }
        
        /* Features Section */
        .features {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background-color: var(--primary);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            color: #666;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background-color: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: var(--primary);
            font-size: 1.8rem;
        }
        
        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        /* Stats Section */
        .stats {
            background-color: var(--primary);
            color: var(--text-light);
            padding: 80px 0;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .stat-item h3 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* About Section */
        .about {
            padding: 80px 0;
        }
        
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }
        
        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }
        
        .about-text h2 {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .about-text p {
            margin-bottom: 20px;
        }
        
        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%);
            color: var(--text-light);
            padding: 80px 0;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
        }
        
        .cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        
        /* Footer */
        footer {
            background-color: #333;
            color: var(--text-light);
            padding: 60px 0 20px;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background-color: var(--primary-light);
            bottom: 0;
            left: 0;
        }
        
        .footer-column ul li {
            margin-bottom: 10px;
        }
        
        .footer-column ul li a {
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        
        .footer-column ul li a:hover {
            opacity: 1;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }
        
        .social-links a:hover {
            background-color: var(--primary-light);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            opacity: 0.7;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content {
                grid-template-columns: 1fr;
            }
            
            .about-image {
                order: -1;
            }
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                background-color: var(--primary);
                width: 100%;
                flex-direction: column;
                padding: 20px 0;
                transition: left 0.3s;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-menu li {
                margin: 15px 0;
                text-align: center;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .btn {
                padding: 10px 20px;
            }
            
            .hero .btn-outline {
                margin-left: 0;
                margin-top: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .hero {
                padding: 130px 0 80px;
            }
            
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-graduation-cap"></i>
                <span>SMK Wahyu Makassar</span>
            </a>
            
            <ul class="nav-menu">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#features">Fitur</a></li>
                <li><a href="#stats">Statistik</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <h1>Raport Mutu Pendidikan SMK Wahyu Makassar</h1>
            <p>Sistem informasi terpadu untuk memantau dan meningkatkan kualitas pendidikan di SMK Wahyu Makassar melalui data yang komprehensif dan analisis yang mendalam.</p>
            <div class="hero-buttons">
                <a href="#" class="btn">Lihat Raport</a>
                <a href="#" class="btn btn-outline">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-title">
                <h2>Fitur Utama</h2>
                <p>Raport Mutu Pendidikan kami menyediakan berbagai fitur untuk membantu meningkatkan kualitas pendidikan di SMK Wahyu Makassar</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Analisis Data</h3>
                    <p>Analisis mendalam tentang performa akademik siswa dan efektivitas program pendidikan.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Profil Siswa</h3>
                    <p>Informasi lengkap tentang perkembangan akademik dan non-akademik setiap siswa.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h3>Evaluasi Guru</h3>
                    <p>Penilaian kinerja guru berdasarkan berbagai indikator kualitas pengajaran.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                    <h3>Kurikulum</h3>
                    <p>Evaluasi efektivitas kurikulum dan rekomendasi untuk pengembangan.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Fasilitas</h3>
                    <p>Penilaian kondisi dan kecukupan fasilitas pendukung pembelajaran.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Kemitraan</h3>
                    <p>Informasi tentang kerjasama dengan industri dan lembaga pendidikan lainnya.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="stats" id="stats">
        <div class="container">
            <div class="section-title">
                <h2>Statistik Kami</h2>
                <p>Pencapaian SMK Wahyu Makassar dalam angka</p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <h3 class="counter">95%</h3>
                    <p>Tingkat Kelulusan</p>
                </div>
                
                <div class="stat-item">
                    <h3 class="counter">87%</h3>
                    <p>Tingkat Penyerapan Kerja</p>
                </div>
                
                <div class="stat-item">
                    <h3 class="counter">50+</h3>
                    <p>Mitra Industri</p>
                </div>
                
                <div class="stat-item">
                    <h3 class="counter">1200+</h3>
                    <p>Siswa Aktif</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Tentang SMK Wahyu Makassar</h2>
                    <p>SMK Wahyu Makassar adalah lembaga pendidikan kejuruan yang berkomitmen untuk menghasilkan lulusan berkualitas yang siap bersaing di dunia kerja. Didirikan pada tahun 1995, sekolah kami telah menjadi salah satu SMK terkemuka di Makassar.</p>
                    <p>Dengan fokus pada pendidikan berbasis kompetensi dan kerjasama erat dengan industri, kami mempersiapkan siswa tidak hanya dengan pengetahuan teoritis tetapi juga keterampilan praktis yang dibutuhkan oleh dunia kerja.</p>
                    <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                </div>
                
                <div class="about-image">
                    <img src="https://source.unsplash.com/random/600x400/?school" alt="SMK Wahyu Makassar">
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Siap Meningkatkan Kualitas Pendidikan?</h2>
            <p>Akses Raport Mutu Pendidikan SMK Wahyu Makassar sekarang dan dapatkan wawasan mendalam tentang kualitas pendidikan di sekolah kita.</p>
            <a href="#" class="btn">Akses Raport Sekarang</a>
        </div>
    </section>
    
    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>SMK Wahyu Makassar</h3>
                    <p>Menyediakan pendidikan berkualitas untuk mempersiapkan generasi masa depan yang kompeten dan berdaya saing.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="#home">Beranda</a></li>
                        <li><a href="#features">Fitur</a></li>
                        <li><a href="#stats">Statistik</a></li>
                        <li><a href="#about">Tentang</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Program Keahlian</h3>
                    <ul>
                        <li><a href="#">Teknik Komputer & Jaringan</a></li>
                        <li><a href="#">Rekayasa Perangkat Lunak</a></li>
                        <li><a href="#">Multimedia</a></li>
                        <li><a href="#">Akuntansi</a></li>
                        <li><a href="#">Administrasi Perkantoran</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Kontak Kami</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 123, Makassar</li>
                        <li><i class="fas fa-phone"></i> (0411) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> info@smkwahyumakassar.sch.id</li>
                    </ul>
                </div>
            </div>

            
            
            <div class="footer-bottom">
                <p>&copy; 2023 SMK Wahyu Makassar. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            mobileMenuBtn.querySelector('i').classList.toggle('fa-bars');
            mobileMenuBtn.querySelector('i').classList.toggle('fa-times');
        });
        
        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    if (navMenu.classList.contains('active')) {
                        navMenu.classList.remove('active');
                        mobileMenuBtn.querySelector('i').classList.remove('fa-times');
                        mobileMenuBtn.querySelector('i').classList.add('fa-bars');
                    }
                }
            });
        });
        
        // Counter Animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200;
        
        function animateCounters() {
            counters.forEach(counter => {
                const target = counter.textContent;
                const isPercentage = target.includes('%');
                const numTarget = parseFloat(target);
                let count = 0;
                
                const updateCount = () => {
                    const increment = numTarget / speed;
                    
                    if (count < numTarget) {
                        count += increment;
                        counter.textContent = isPercentage ? 
                            Math.ceil(count) + '%' : 
                            (target.includes('+') ? Math.ceil(count) + '+' : Math.ceil(count));
                        setTimeout(updateCount, 1);
                    } else {
                        counter.textContent = target;
                    }
                };
                
                updateCount();
            });
        }
        
        // Intersection Observer for Counter Animation
        const statsSection = document.querySelector('.stats');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(statsSection);
        
        // Scroll Animation for Feature Cards
        const featureCards = document.querySelectorAll('.feature-card');
        
        window.addEventListener('scroll', () => {
            featureCards.forEach(card => {
                const cardPosition = card.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (cardPosition < screenPosition) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        });
        
        // Initialize Feature Cards with opacity 0
        featureCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        });
    </script>
</body>
</html>