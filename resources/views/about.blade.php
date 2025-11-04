<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Profil - Haura & Saleh</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center center/cover;
      color: white;
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* NAVBAR */
    nav {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      background: linear-gradient(to right, rgba(20,20,20,0.8), rgba(50,50,50,0.7));
      backdrop-filter: blur(10px);
      padding: 12px 40px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
      font-size: 13px;
    }

    .nav-left a {
      color: white;
      text-decoration: none;
      margin-right: 15px;
      font-weight: 600;
    }

    .nav-left a:hover {
      text-decoration: underline;
    }

    .nav-center {
      text-align: center;
      color: #e0e0e0;
      font-weight: 500;
    }

    .nav-right {
      color: #e0e0e0;
      font-weight: 500;
    }

    /* MAIN CONTENT */
    h1 {
      text-align: center;
      margin-top: 120px;
      font-size: 22px;
      font-weight: 700;
      text-shadow: 0 0 5px rgba(0,0,0,0.8);
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 40px;
      margin-top: 50px;
      flex-wrap: wrap;
      padding: 20px;
    }

    /* CARD STYLE (lebih besar & transparan) */
    .container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 40px;
  margin-top: 50px;
  flex-wrap: wrap;
  padding: 20px;
}

.card {
  width: 380px;
  height: 360px; /* ← Tinggi tetap agar semua card sama besar */
  background: rgba(255, 255, 255, 0.12); /* tetap transparan lembut */
  backdrop-filter: blur(25px); /* efek kaca */
  -webkit-backdrop-filter: blur(25px);
  border-radius: 25px;
  padding: 25px;
  text-align: center;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
  border: 1px solid rgba(255,255,255,0.25);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 40px rgba(0,0,0,0.5);
    }

    /* GAMBAR PROFIL */
    .card img {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 20px auto;
      border: 4px solid rgba(255,255,255,0.4);
      box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }

    .card h2 {
      font-size: 20px;
      margin: 10px 0 5px 0;
      font-weight: 600;
    }

    .card p {
      font-size: 14px;
      color: rgba(255,255,255,0.8);
      margin: 5px 0 15px 0;
    }

    .bio {
      font-size: 13px;
      line-height: 1.6;
      color: rgba(255,255,255,0.9);
      font-style: italic;
    }

    /* FOOTER */
    footer {
      text-align: center;
      padding: 30px;
      margin-top: 80px;
      font-size: 13px;
      color: rgba(255,255,255,0.7);
      background: rgba(0,0,0,0.3);
      backdrop-filter: blur(10px);
    }

  </style>


  </style>
</head>
<body>

  <nav>
    <div class="nav-left">
      <a href="#">Home</a>
      <a href="#">About</a>
    </div>
    <div class="nav-center">
      2301010036 – HAURA FEBRIA HIDAYAH (GENAP)
    </div>
    <div class="nav-right">
      2301010041 – SALEH HALID (GANJIL)
    </div>
  </nav>

  <h1>Halaman ini dibuat oleh: <strong>2301010036 - HAURA FEBRIA HIDAYAH (GENAP)</strong></h1>

  <div class="container">

    <div class="card">
      <img src="https://i.pinimg.com/originals/93/bf/87/93bf87f3e2ed4d173458b530c3f3fbb9.jpg" alt="Profile 1">
      <h2>HAURA FEBRIA HIDAYAH</h2>
      <p>2301010036</p>
      <div class="bio">
        professional back end developer and occasionally AK47 bringer
      </div>
    </div>

    <div class="card">
      <img src="https://static.wikia.nocookie.net/reddeadredemption/images/8/89/ArthurMorganRedDeadRedemptionII.png" alt="Profile 2">
      <h2>SALEH HALID</h2>
      <p>2301010041</p>
      <div class="bio">
        Designing front-end is my passion sir 💖
      </div>
    </div>

  </div>

  <footer>
    &copy; 2025 Halaman Profil | Dibuat untuk tugas pemrograman web
  </footer>

</body>
</html>
