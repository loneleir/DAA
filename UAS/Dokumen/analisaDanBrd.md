# 1. Analisis Studi Kasus
## 1.1. Latar Belakang
Kreativitas dan seni memainkan peran yang sangat penting dalam memperkaya budaya dan sejarah suatu bangsa. Di Indonesia, salah satu tokoh seni yang memiliki pengaruh besar adalah Raden Saleh. Lukisan-lukisannya menjadi warisan budaya yang bernilai tinggi, memiliki makna historis yang mendalam, serta mencerminkan dinamika sosial dan politik pada zamannya. Namun, informasi mengenai karya-karya seni beliau tidak selalu mudah diakses oleh masyarakat umum. Lukisan-lukisan tersebut tersebar di berbagai tempat, tanpa adanya satu platform yang menyajikan informasi lengkap mengenai karya-karya Raden Saleh secara sistematis.

Di era digital ini, sebuah sistem yang dapat menyajikan informasi secara terpusat tentang lukisan-lukisan Raden Saleh menjadi sangat penting. Platform ini akan memudahkan masyarakat untuk mengakses dan memahami karya-karya tersebut, serta meningkatkan apresiasi terhadap seni budaya Indonesia.

## 1.2. Rumusan Masalah
- Bagaimana cara menyediakan informasi mengenai lukisan-lukisan Raden Saleh dalam satu platform yang mudah diakses oleh masyarakat?
- Bagaimana cara mengorganisir lukisan-lukisan tersebut secara sistematis, agar pengguna dapat melihat urutannya dengan mudah, terutama berdasarkan tahun pembuatan?
- Bagaimana cara menyusun dan mengelola data lukisan secara efisien menggunakan algoritma yang tepat untuk memastikan pengurutan dan akses yang cepat?

## 1.3. Solusi dengan Algoritma Greedy
Untuk menyelesaikan masalah pengurutan dan penyajian data lukisan, diterapkan algoritma Greedy dalam proses pengambilan keputusan untuk menyusun informasi lukisan. Algoritma Greedy akan memilih lukisan dengan tahun pembuatan terkecil terlebih dahulu dan mengurutkan lukisan-lukisan tersebut secara bertahap tanpa mempertimbangkan langkah-langkah sebelumnya. Dengan pendekatan ini, pengguna dapat dengan mudah mengakses daftar lukisan dalam urutan yang sistematis sesuai dengan kronologi sejarah.

## 1.4. Tujuan Program
- Mengembangkan platform digital yang menyajikan daftar lukisan Raden Saleh secara terstruktur dan sistematis.
- Mempermudah masyarakat dalam mengakses informasi terkait setiap lukisan Raden Saleh melalui antarmuka yang sederhana.
- Menggunakan algoritma Greedy untuk mengurutkan dan menampilkan data lukisan secara efisien.
- Memberikan fitur pengelolaan data lukisan bagi admin untuk menjaga keakuratan dan kelengkapan informasi.

# 2. Business Requirement Document (BRD)
## 2.1. Latar Belakang
Sistem ini dikembangkan sebagai solusi untuk mengakses informasi mengenai lukisan-lukisan Raden Saleh dalam satu platform digital. Platform ini memungkinkan pengguna untuk mengakses data lengkap tentang setiap lukisan dengan cara yang mudah dan cepat. Dengan adanya sistem ini, masyarakat dapat memperoleh informasi terkait karya-karya seni Raden Saleh tanpa harus mencari di berbagai sumber yang terpisah. Selain itu, sistem ini menyediakan fitur bagi admin untuk mengelola dan memperbarui data lukisan secara berkala, memastikan akurasi dan ketersediaan data.

## 2.2. Tujuan Pengembangan Sistem
- Menyediakan sistem yang menampilkan daftar lukisan Raden Saleh berdasarkan urutan tahun pembuatan, sehingga lebih mudah dipahami.
- Memudahkan pengguna untuk melihat informasi tentang setiap lukisan, termasuk deskripsi dan tahun pembuatan.
- Menyusun data secara sistematis menggunakan algoritma Greedy, memastikan pengurutan yang efisien.
- Memberikan kemampuan pengelolaan data (CRUD) bagi admin untuk menambah, mengedit, atau menghapus informasi lukisan sesuai kebutuhan.

## 2.3. Fitur Utama
- **Daftar Lukisan:** Menampilkan daftar lukisan Raden Saleh secara berurutan berdasarkan tahun pembuatan.
- **Detail Lukisan:** Menyediakan informasi singkat dan lengkap tentang setiap lukisan, termasuk deskripsi dan tahun pembuatan.
- **Manajemen Lukisan (Admin Only):**  
    - Menambahkan lukisan baru ke dalam sistem.  
    - Mengedit informasi mengenai lukisan yang sudah ada.  
    - Menghapus lukisan dari daftar jika diperlukan.

## 2.4. Ruang Lingkup (Scope)
### 2.4.1. Lingkup Fungsional
- Menampilkan daftar lukisan secara berurut berdasarkan tahun pembuatan.
- Pengguna dapat melihat detail setiap lukisan yang dipilih.
- Admin dapat melakukan CRUD (Create, Read, Update, Delete) terhadap data lukisan.

### 2.4.2. Lingkup Non-Fungsional
- Sistem berjalan di lingkungan localhost dengan Ubuntu dan Visual Studio Code.
- Dibangun menggunakan framework Laravel dengan database MySQL/PostgreSQL untuk penyimpanan data.
- Memiliki antarmuka yang responsif dan sederhana, serta dapat diakses melalui perangkat desktop dan mobile.

### 2.4.3. Batasan Sistem
- Sistem hanya menampilkan informasi mengenai 10 lukisan Raden Saleh.
- Sistem tidak mendukung pencarian lokasi fisik lukisan.
- Fitur untuk mengunggah gambar atau file multimedia lainnya tidak didukung dalam tahap awal.

## 2.5. Aktor Sistem
- **Admin:** Bertanggung jawab atas pengelolaan data lukisan, termasuk penambahan, pengeditan, dan penghapusan data.
- **Pengguna (Visitor):** Mengakses daftar lukisan dan informasi terkait, serta dapat melihat detail setiap lukisan.

## 2.6. Use Case Diagram
- **Admin:** Memiliki akses penuh untuk melakukan CRUD pada data lukisan.
- **Pengguna:** Dapat melihat daftar lukisan dan memilih untuk melihat detail lukisan.

## 2.7. Flowchart Sistem
1. Pengguna mengakses halaman utama.
2. Sistem menampilkan daftar lukisan yang sudah diurutkan berdasarkan tahun pembuatan.
3. Pengguna memilih salah satu lukisan untuk melihat detail informasi.
4. Admin yang login dapat menambah, mengedit, atau menghapus data lukisan.

## 2.8. Implementasi Algoritma Greedy dalam Sistem
Langkah-langkah untuk mengurutkan lukisan menggunakan algoritma Greedy:
1. Ambil seluruh data lukisan dari database.
2. Urutkan lukisan-lukisan berdasarkan tahun pembuatan, dimulai dari yang paling awal.
3. Tampilkan daftar lukisan dalam urutan yang sudah diurutkan tersebut.

## 2.9. Kebutuhan Sistem
### 2.9.1. Model, Migrasi, dan Seeder
**Model Lukisan**  
Model Lukisan akan menyimpan informasi tentang setiap lukisan dengan atribut berikut:
- id (Primary Key, Integer): ID unik untuk setiap lukisan.
- nama_lukisan (String): Nama atau judul lukisan.
- tahun_pembuatan (Integer): Tahun pembuatan lukisan, digunakan untuk pengurutan.
- deskripsi (Text): Deskripsi mengenai lukisan yang mencakup makna dan konteks karya tersebut.

**Migrasi**  
Tabel lukisan dengan kolom-kolom:
- id (Primary Key)
- nama_lukisan (String)
- tahun_pembuatan (Integer)
- deskripsi (Text)

**Seeder**  
Seeder untuk menambahkan data awal berupa 10 lukisan Raden Saleh, yang berisi nama, tahun pembuatan, dan deskripsi.

### 2.9.2. Resource (Jika Menggunakan Filament Admin Panel)
- LukisanResource: Untuk mempermudah operasi CRUD di panel admin.

## 2.10. Rancangan Database
Untuk menyimpan informasi tentang lukisan-lukisan Raden Saleh, sistem ini akan menggunakan satu tabel utama dalam basis data yang disebut Lukisan. Tabel ini akan menyimpan informasi berikut:
- id (Primary Key, Integer): Kolom ini menyimpan ID unik untuk setiap lukisan. ID ini digunakan untuk mengidentifikasi setiap lukisan secara unik dalam sistem.
- nama_lukisan (String): Kolom ini menyimpan nama atau judul lukisan yang mudah dikenali oleh pengguna.
- tahun_pembuatan (Integer): Kolom ini menyimpan tahun pembuatan lukisan yang digunakan untuk pengurutan lukisan berdasarkan kronologi waktu pembuatan.
- deskripsi (Text): Kolom ini berisi deskripsi mengenai lukisan yang mencakup makna, konteks, dan sejarah di balik karya tersebut.

**Relasi Tabel**  
Saat ini, sistem hanya memerlukan satu tabel, yaitu Lukisan. Namun, jika di masa depan ada pengembangan lebih lanjut, misalnya untuk mengelompokkan lukisan berdasarkan kategori atau galeri, maka tabel-tabel tambahan bisa ditambahkan untuk mendukung fitur tersebut.

**Proses Pengurutan Data**  
Sistem akan mengurutkan lukisan berdasarkan tahun_pembuatan. Dengan pengurutan ini, pengguna dapat dengan mudah melihat daftar lukisan sesuai dengan urutan kronologis dari yang paling awal hingga yang terbaru.

## 2.11. Penggunaan Algoritma Greedy dalam Pengurutan
Algoritma Greedy diterapkan untuk menyelesaikan masalah pengurutan lukisan. Dalam hal ini, algoritma ini memilih lukisan dengan tahun pembuatan terkecil terlebih dahulu, kemudian melanjutkan dengan lukisan berikutnya yang memiliki tahun pembuatan yang lebih besar. Pendekatan ini dilakukan hingga semua lukisan diurutkan.

**Langkah-langkahnya:**
1. Ambil data lukisan yang ada dalam sistem.
2. Urutkan data berdasarkan tahun_pembuatan, mulai dari yang paling awal.
3. Tampilkan daftar lukisan dalam urutan yang sudah diurutkan tersebut.