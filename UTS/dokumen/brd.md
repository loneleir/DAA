# Dokumen Persyaratan Bisnis (BRD)
## Proyek: Aplikasi Pengelolaan Data Guru SMKN 1 Kabupaten Tangerang

### 1. Tujuan Proyek
**Objektif:** Aplikasi ini bertujuan untuk mempermudah pengelolaan data guru di SMKN 1 Kabupaten Tangerang. Sistem ini memungkinkan admin untuk mengelola data guru dengan mudah dan efisien.

### 2. Fitur Utama
#### Untuk Guru:
- **Melihat Data Pribadi:** Guru dapat melihat informasi data pribadi mereka seperti:
  - Nama
  - Alamat
  - Email
  - Nomor telepon
  - Mata pelajaran yang diajarkan
  - Pendidikan terakhir

#### Untuk Admin:
- **Pengelolaan Data Guru:** Admin dapat melakukan hal berikut terhadap data guru:
  - Menambah, mengubah, dan menghapus data guru.
  - Melihat daftar guru beserta informasi terkait.

### 3. Persyaratan Fungsional
- **Sistem Login:**
  - Akses dibedakan berdasarkan peran, yaitu admin dan guru.

- **Pengelolaan Data Guru:**
  - Admin dapat menambah, mengedit, dan menghapus data guru.
  - Guru hanya bisa melihat data pribadi mereka sendiri.

### 4. Persyaratan Non-Fungsional
- **Kegunaan:**
  - Antarmuka aplikasi harus mudah digunakan oleh guru dan admin.

- **Keamanan:**
  - Admin memiliki kontrol penuh atas data guru, sedangkan guru hanya bisa melihat data pribadi mereka tanpa hak untuk mengubah atau menghapusnya.

### 5. Model, Migrasi, Seeder, dan Resource yang Perlu Dibuat
#### Model: Teacher
- Model ini akan menyimpan informasi data guru seperti:
  - Nama
  - Alamat
  - Email
  - Nomor telepon
  - Mata pelajaran yang diajarkan
  - Pendidikan terakhir

#### Migration: Struktur Tabel `teachers` di Database
- Kolom-kolom berikut akan ada di dalam tabel `teachers`:
  - `id`: Primary Key
  - `name`: varchar(255) - Nama guru
  - `address`: varchar(255) - Alamat guru
  - `email`: varchar(255) - Email guru
  - `phone`: varchar(255) - Nomor telepon guru
  - `subject`: varchar(255) - Mata pelajaran yang diajarkan
  - `education`: varchar(255) - Pendidikan terakhir
  - `created_at`: timestamp - Waktu data dibuat
  - `updated_at`: timestamp - Waktu data diubah

#### Seeder: 
- Digunakan untuk memasukkan data guru awal untuk pengujian aplikasi.

#### API Resource:
- Endpoint API untuk mengakses data guru. Admin dapat mengelola data guru, sementara guru hanya bisa melihat data mereka.

### 6. Analisis Permissions untuk Guru dan Admin
Pada proyek aplikasi pengelolaan data guru ini, permissions diperlukan untuk membatasi akses guru terhadap fitur yang sesuai dengan peran mereka, sementara admin memiliki akses penuh ke seluruh sistem. Berikut adalah permissions yang diperlukan:

#### Permissions untuk Guru:
- **view_teacher**: Mengizinkan guru melihat data pribadi mereka.

#### Permissions untuk Admin:
- **manage_teachers**: Memberikan admin hak untuk menambah, mengedit, dan menghapus data guru.

### 7. Implementasi Model dan Seeder untuk Permissions
#### Model: Permission
- Model ini bertanggung jawab untuk menyimpan dan mengelola data permission seperti `view_teacher` dan `manage_teachers`.
- Atribut pada Model Permission:
  - `id`: Primary key untuk setiap permission.
  - `name`: Nama permission (misalnya `view_teacher`).
  - `guard_name`: Guard yang digunakan untuk permission ini (defaultnya web).

#### Seeder:
- **PermissionsSeeder** digunakan untuk membuat dan menetapkan permissions kepada role guru dan admin.