# Tujuan Aplikasi
Aplikasi ini dirancang untuk mempermudah pengelolaan data guru di SMKN 1 Kabupaten Tangerang. Aplikasi ini memungkinkan admin untuk mengelola data pribadi guru secara efisien dan memberikan guru akses untuk melihat data pribadi mereka. Fitur utama mencakup pengelolaan data guru yang mencakup informasi seperti nama, alamat, email, nomor telepon, mata pelajaran yang diajarkan, dan pendidikan terakhir. Admin dapat melakukan tugas pengelolaan data guru, sementara guru hanya dapat melihat data pribadi mereka tanpa dapat mengubah atau menghapusnya.

## Aktor
### Admin
- Admin memiliki akses penuh ke seluruh sistem dan data guru. Admin dapat:
  - Menambah, mengubah, dan menghapus data guru.
  - Melihat daftar guru beserta informasi terkait.
  - Mengelola dan memodifikasi data guru sesuai kebutuhan.

### Guru
- Guru memiliki akses terbatas, hanya dapat melihat data pribadi mereka, seperti:
  - Nama
  - Alamat
  - Email
  - Nomor telepon
  - Mata pelajaran yang diajarkan
  - Pendidikan terakhir
  
Guru tidak dapat mengubah atau menghapus data pribadi mereka. Akses mereka terbatas untuk memastikan data yang dimiliki admin tetap aman dan terkelola dengan baik.

## Fitur dan Fungsionalitas
### Fitur untuk Guru
#### Melihat Data Pribadi:
- Guru dapat melihat data pribadi mereka yang mencakup informasi berikut:
  - Nama
  - Alamat
  - Email
  - Nomor telepon
  - Mata pelajaran yang diajarkan
  - Pendidikan terakhir
  
Fitur ini hanya memungkinkan guru untuk mengakses informasi yang berkaitan dengan mereka sendiri dan tidak dapat mengubah atau menghapus data tersebut.

### Fitur untuk Admin
#### Pengelolaan Data Guru:
- Admin dapat menambah, mengedit, dan menghapus data guru, termasuk:
  - Nama
  - Alamat
  - Email
  - Nomor telepon
  - Mata pelajaran yang diajarkan
  - Pendidikan terakhir
  
#### Melihat Daftar Guru:
- Admin dapat melihat daftar guru beserta informasi terkait.

#### Pengelolaan Hak Akses:
- Admin dapat mengelola hak akses untuk setiap pengguna, memastikan bahwa guru hanya dapat melihat data mereka sendiri, sedangkan admin dapat mengakses dan mengelola seluruh data guru.

## Persyaratan Fungsional
### Sistem Login:
- Sistem login membedakan akses berdasarkan peran pengguna, yaitu admin dan guru. Admin memiliki akses penuh ke semua data dan fitur aplikasi, sedangkan guru hanya dapat mengakses data pribadi mereka sendiri.

### Pengelolaan Data Guru:
#### Admin:
- Admin dapat menambah, mengubah, dan menghapus data guru, serta melihat daftar lengkap data guru.

#### Guru:
- Guru hanya dapat melihat data pribadi mereka tanpa hak untuk mengedit atau menghapus informasi.

## Persyaratan Non-Fungsional
### Kegunaan:
- Aplikasi ini dirancang dengan antarmuka yang mudah digunakan oleh kedua peran pengguna (admin dan guru), dengan desain yang intuitif agar pengguna dapat dengan mudah mengakses fitur yang tersedia.

### Keamanan:
- Aplikasi ini memastikan bahwa hanya admin yang dapat mengubah atau menghapus data guru, sementara guru hanya dapat melihat data mereka tanpa memiliki hak untuk mengubah atau menghapusnya.
