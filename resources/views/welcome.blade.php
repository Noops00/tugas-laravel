<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Luar Angkasa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&family=Exo+2:wght@300;400;600&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --space-dark: #0a0e29;
            --space-medium: #1a1b46;
            --space-light: #2c2d67;
            --neon-blue: #00f2ff;
            --neon-purple: #b400ff;
            --neon-pink: #ff00e6;
            --star-color: #ffffff;
        }
        
        body {
            font-family: 'Exo 2', sans-serif;
            background-color: var(--space-dark);
            color: #ffffff;
            line-height: 1.6;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Background Stars */
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .star {
            position: absolute;
            background-color: var(--star-color);
            border-radius: 50%;
            animation: twinkle var(--duration) infinite ease-in-out;
            opacity: var(--opacity);
        }
        
        @keyframes twinkle {
            0%, 100% { opacity: var(--opacity); }
            50% { opacity: 0.2; }
        }
        
        .shooting-star {
            position: absolute;
            width: 100px;
            height: 1px;
            background: linear-gradient(to right, rgba(0,0,0,0), #ffffff);
            transform: rotate(var(--angle));
            animation: shooting var(--duration) var(--delay) infinite linear;
            opacity: 0;
        }
        
        @keyframes shooting {
            0% { transform: translateX(-100px) rotate(var(--angle)); opacity: 1; }
            20% { opacity: 1; }
            40% { opacity: 0; }
            100% { transform: translateX(calc(100vw + 100px)) rotate(var(--angle)); opacity: 0; }
        }
        
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: rgba(10, 14, 41, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 30px rgba(0, 242, 255, 0.1),
                        0 0 60px rgba(180, 0, 255, 0.1);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }
        
        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(
                circle at center,
                transparent 30%,
                rgba(180, 0, 255, 0.03) 70%,
                rgba(0, 242, 255, 0.05) 100%
            );
            z-index: -1;
            animation: rotate 30s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }
        
        .header::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 2px;
            background: linear-gradient(to right, var(--neon-blue), var(--neon-purple));
        }
        
        .profile-container {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto 30px;
        }
        
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid transparent;
            background: linear-gradient(var(--space-dark), var(--space-dark)) padding-box,
                        linear-gradient(to right, var(--neon-blue), var(--neon-purple)) border-box;
            position: relative;
            z-index: 2;
        }
        
        .profile-aura {
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 50%;
            background: radial-gradient(
                circle at center,
                rgba(180, 0, 255, 0.5) 0%,
                rgba(0, 242, 255, 0.3) 50%,
                transparent 70%
            );
            filter: blur(10px);
            animation: pulse 3s infinite alternate;
            z-index: 1;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(1.05); opacity: 0.8; }
        }
        
        h1, h2, h3 {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        
        h1 {
            font-size: 2.2em;
            margin: 10px 0;
            background: linear-gradient(to right, var(--neon-blue), var(--neon-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 5px rgba(0, 242, 255, 0.3);
        }
        
        .title {
            font-size: 1.1em;
            color: #c0c0c0;
            letter-spacing: 3px;
            position: relative;
            display: inline-block;
        }
        
        h2 {
            font-size: 1.5em;
            margin: 30px 0 20px;
            color: var(--neon-blue);
            position: relative;
            display: inline-block;
        }
        
        h2::before {
            content: '//';
            color: var(--neon-purple);
            margin-right: 10px;
            font-weight: 300;
        }
        
        .section {
            margin-bottom: 30px;
            padding: 20px;
            background: rgba(28, 32, 70, 0.3);
            border-radius: 10px;
            border-left: 3px solid var(--neon-blue);
            position: relative;
            overflow: hidden;
        }
        
        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                45deg,
                transparent 0%,
                rgba(0, 242, 255, 0.03) 50%,
                transparent 100%
            );
            z-index: -1;
        }
        
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        
        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .info-item {
            display: flex;
            align-items: center;
        }
        
        .info-label {
            font-weight: 600;
            color: var(--neon-blue);
            margin-right: 10px;
            min-width: 120px;
        }
        
        .info-value {
            color: #e0e0e0;
        }
        
        .timeline {
            position: relative;
            margin-left: 20px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, var(--neon-blue), var(--neon-purple));
        }
        
        .timeline-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 25px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            top: 5px;
            left: -4px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--neon-pink);
            box-shadow: 0 0 10px var(--neon-pink);
        }
        
        .timeline-date {
            font-family: 'Orbitron', sans-serif;
            color: var(--neon-blue);
            font-size: 0.9em;
            margin-bottom: 5px;
        }
        
        .timeline-title {
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 5px;
        }
        
        .timeline-subtitle {
            color: #a0a0a0;
            font-size: 0.9em;
            margin-bottom: 5px;
        }
        
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .skill-item {
            background: linear-gradient(to right, rgba(0, 242, 255, 0.1), rgba(180, 0, 255, 0.1));
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9em;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .skill-item::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(
                circle at center,
                rgba(255, 255, 255, 0.3) 0%,
                transparent 60%
            );
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .skill-item:hover::before {
            opacity: 0.2;
        }
        
        .hobbies-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 15px;
        }
        
        .hobby-item {
            text-align: center;
            padding: 15px 10px;
            background: rgba(28, 32, 70, 0.5);
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .hobby-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 242, 255, 0.2);
        }
        
        .hobby-icon {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--neon-blue);
        }
        
        .about-text {
            position: relative;
            line-height: 1.8;
        }
        
        .about-text p {
            margin-bottom: 15px;
        }
        
        .about-text::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: -10px;
            font-size: 60px;
            color: rgba(0, 242, 255, 0.2);
            font-family: Georgia, serif;
        }
        
        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9em;
            color: #a0a0a0;
        }
        
        .cosmic-signature {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 3px;
            font-size: 0.8em;
            margin-top: 10px;
            color: var(--neon-blue);
        }
    </style>
</head>
<body>
    <!-- Stars Background -->
    <div class="stars" id="stars"></div>
    
    <div class="container">
        <header class="header">
            <div class="profile-container">
                <div class="profile-aura"></div>
                <img src="petruk.jpg" alt="" class="profile-img">
            </div>
            <h1>Noopsツ</h1>
            <div class="title">Mahasiwa</div>
        </header>
        
        <section class="section">
            <h2>Data Pribadi</h2>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">Nama:</div>
                    <div class="info-value">Nouvall Ghiffary</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Tanggal Lahir:</div>
                    <div class="info-value">17 September 2003</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Alamat:</div>
                    <div class="info-value">Taman Harapan Baru, Blok.D10/No.22</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Email:</div>
                    <div class="info-value">Nouvallghiffary1@gmail.com</div>
                </div>
                <div class="info-item">
                    <div class="info-label">Telepon:</div>
                    <div class="info-value">+62 81380859525</div>
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Tentang Saya</h2>
            <div class="about-text">
                <p>
                    Selamat datang di biodata antariksa saya! Saya adalah seorang mahasiswa semeter 6 
                    berkuliah di Universitas Bina Sarana Infomatika jurusan Teknologi Informatika fakultas Teknik dan Informatika
                </p>
                <p>
                    Dengan semangat eksplorasi yang tak pernah padam, saya terus mengejar pengetahuan dan 
                    keterampilan baru untuk memperluas cakrawala digital saya. Layaknya roket yang meluncur 
                    menuju ruang angkasa, saya selalu berusaha melampaui batas-batas kemampuan dan mencapai 
                    ketinggian baru dalam karier saya.
                </p>
            </div>
        </section>
        
        <section class="section">
            <h2>Pendidikan</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2011 - 2016</div>
                    <div class="timeline-title">SDN Ciputat 04 Tangerang</div>
                    <div class="timeline-subtitle">SDN Ciputat 04 Tangerang</div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2017 - 2019</div>
                    <div class="timeline-title">SMP N 146 Jakarta</div>
                    <div class="timeline-subtitle">SMP N 146 Jakarta</div>
                    <p>Aktif dalam klub Paamuka, Basket, Futsal, dan bela diri Silat</p>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2019 - 2022</div>
                    <div class="timeline-title">SMA N 76 Jakarta</div>
                    <div class="timeline-subtitle">SMA N 76 Jakarta</div>
                </div>
            </div>
        </section>
        
        <section class="section">
            <h2>Hobi</h2>
            <div class="hobbies-container">
                <div class="hobby-item">
                    <div class="hobby-icon">🔭</div>
                    <p>Astronomi</p>
                </div>
                <div class="hobby-item">
                    <div class="hobby-icon">🚀</div>
                    <p>Roket Mini</p>
                </div>
                <div class="hobby-item">
                    <div class="hobby-icon">🎮</div>
                    <p>Game Sci-Fi</p>
                </div>
                <div class="hobby-item">
                    <div class="hobby-icon">📚</div>
                    <p>Buku Fiksi Ilmiah</p>
                </div>
                <div class="hobby-item">
                    <div class="hobby-icon">🎨</div>
                    <p>Seni Digital</p>
                </div>
                <div class="hobby-item">
                    <div class="hobby-icon">🎧</div>
                    <p>Musik Elektronik</p>
                </div>
            </div>
        </section>
        
        <footer class="footer">
            <p>Biodata ini dibuat dengan HTML & CSS bertema luar angkasa</p>
            <p class="cosmic-signature">TRANSMISI DARI SEKTOR ZX-42 // TAHUN BUMI 2025</p>
        </footer>
    </div>
    
    <script>
        // Create stars
        function createStars() {
            const stars = document.getElementById('stars');
            const starsCount = 200;
            
            for (let i = 0; i < starsCount; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                
                // Random position
                const x = Math.random() * 100;
                const y = Math.random() * 100;
                
                // Random size
                const size = Math.random() * 3;
                
                // Random opacity and twinkle duration
                const opacity = Math.random() * 0.7 + 0.3;
                const duration = Math.random() * 5 + 3;
                
                star.style.left = x + 'vw';
                star.style.top = y + 'vh';
                star.style.width = size + 'px';
                star.style.height = size + 'px';
                star.style.setProperty('--opacity', opacity);
                star.style.setProperty('--duration', duration + 's');
                
                stars.appendChild(star);
            }
            
            // Create shooting stars
            const shootingStarsCount = 5;
            
            for (let i = 0; i < shootingStarsCount; i++) {
                const shootingStar = document.createElement('div');
                shootingStar.className = 'shooting-star';
                
                // Random position
                const y = Math.random() * 70;
                
                // Random angle
                const angle = Math.random() * 20 - 10;
                
                // Random duration and delay
                const duration = Math.random() * 3 + 2;
                const delay = Math.random() * 15;
                
                shootingStar.style.top = y + 'vh';
                shootingStar.style.setProperty('--angle', angle + 'deg');
                shootingStar.style.setProperty('--duration', duration + 's');
                shootingStar.style.setProperty('--delay', delay + 's');
                
                stars.appendChild(shootingStar);
            }
        }
        
        // Initialize stars when page loads
        window.addEventListener('load', createStars);
    </script>
</body>
</html>
