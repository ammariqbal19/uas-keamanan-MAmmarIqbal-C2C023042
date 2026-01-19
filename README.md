**Deskripsi Proyek**
Proyek ini merupakan aplikasi web sederhana berbasis PHP yang dibuat untuk mensimulasikan pengujian keamanan aplikasi web pada lingkungan localhost. Aplikasi terdiri dari dua versi, yaitu versi rentan (vulnerable) dan versi aman (secure), yang digunakan untuk mempelajari perbedaan implementasi keamanan serta dampaknya terhadap risiko sistem.

Deskripsi Kerentanan
1. Login
   Modul login pada versi rentan tidak menerapkan pembatasan jumlah percobaan login dan tidak menggunakan mekanisme pengamanan tambahan. Kondisi ini memungkinkan penyerang melakukan percobaan login berulang kali hingga menemukan kombinasi username dan password yang benar.
2. XSS
   Modul input komentar pada versi rentan menampilkan kembali data input pengguna tanpa proses sanitasi. Hal ini menyebabkan kerentanan Cross-Site Scripting (XSS), di mana penyerang dapat menyisipkan kode JavaScript yang akan dieksekusi oleh browser.
3. LFI
   Modul File Viewer pada versi rentan langsung menggunakan parameter file dari URL ke fungsi include() tanpa validasi. Hal ini memungkinkan terjadinya Local File Inclusion (LFI), di mana penyerang dapat mencoba mengakses file lain di server.

**Teknik Mitigasi**
1. Mitigasi Brute Force
   - Menggunakan hashing password dengan algoritma bcrypt.
   - Menerapkan rate limiting sederhana menggunakan session untuk membatasi jumlah percobaan login.
2. XSS
   - Melakukan sanitasi output menggunakan fungsi htmlspecialchars() sebelum data ditampilkan ke browser.
   - Mencegah eksekusi script JavaScript berbahaya.
3. LFI
   - Menggunakan whitelist file yang diperbolehkan untuk diakses.
   - Membatasi path file yang dapat di-include agar tidak terjadi traversal direktori.

**Analisis Resiko Singkat**
- Login ( Brute Force )
  Dampak: Tinggi, Penyerang dapat mengambil alih akun jika berhasil menebak password.
  Kemungkinan: Tinggi, Tidak adanya pembatasan login membuat serangan mudah dilakukan.
  Prioritas Perbaikan: Tinggi
- Komentar ( XSS )
  Dampak: Sedang Dapat mencuri sesi pengguna atau mengubah tampilan halaman.
  Kemungkinan: Tinggi, Input pengguna mudah dimanipulasi.
  Prioritas Perbaikan: Sedang
- File ( LFI )
  Dampak: Tinggi, Dapat membuka file konfigurasi atau informasi sensitif.
  Kemungkinan: Sedang, Bergantung pada struktur file server.
  Prioritas Perbaikan: Tinggi
