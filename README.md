# MOREV

# Deskripsi
Website ini adalah platform untuk menemukan berita terbaru, ulasan film, dan informasi tentang film favorit Anda. Terdapat fitur untuk pengguna guest dan pengguna yang login, serta halaman otentikasi untuk **Sign In** dan **Sign Up**.

## Fitur Utama
1. **Landing Page:** Halaman utama yang menyambut pengunjung.
2. **News Section:** Berisi berita terbaru seputar dunia film.
3. **Reviews Section:** Menampilkan ulasan dari berbagai film.
4. **About Section:** Informasi tentang website.
5. **Authentication:**
   - **Sign Up:** Pendaftaran akun baru.
   - **Sign In:** Masuk ke akun untuk mengakses fitur tambahan.
6. **Dashboard:** Halaman khusus untuk pengguna yang sudah login.

---

## Struktur Folder
web-project/
├── guest/
│   ├── index.html        # Landing Page
│   ├── news.html         # Halaman berita
│   ├── reviews.html      # Halaman ulasan
│   ├── about.html        # Halaman tentang
│   ├── css/
│   │   ├── landing.css   # CSS untuk landing page
│   │   ├── news.css      # CSS untuk news
│   │   ├── reviews.css   # CSS untuk reviews
│   │   └── about.css     # CSS untuk about
├── dashboard/
│   ├── index.html        # Dashboard utama
│   ├── news.html         # Halaman berita
│   ├── reviews.html      # Halaman ulasan
│   ├── profile.html      # Halaman profil
│   ├── css/
│   │   ├── dashboard.css # CSS untuk dashboard utama
│   │   ├── news.css      # CSS untuk news (dashboard)
│   │   ├── reviews.css   # CSS untuk reviews (dashboard)
│   │   └── profile.css   # CSS untuk profile
├── auth/
│   ├── login.html        # Halaman Sign In
│   ├── register.html     # Halaman Sign Up
│   ├── css/
│   │   ├── login.css     # CSS untuk Sign In
│   │   └── register.css  # CSS untuk Sign Up
└── shared/
    ├── css/
    │   ├── global.css    # CSS global untuk semua halaman
    │   └── components.css # (Opsional) Komponen seperti navbar/footer
