<h1 align="center">Explore SULBAR</h1>

<hr/>

<h3 align="center">Sistem Informasi Wisata dan Tour Guide Sulawesi Barat</h3>

---

<p align="center">
  <img src="https://github.com/user-attachments/assets/36f5b8ce-b59d-4c5d-892f-31a6f36b31b5" alt="Logo Unsulbar" width="200"/>
</p>

<p align="center">
  <strong>F. AYU IQRAAMI</strong><br/><br/>
  <strong>D0223329</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

---

## 👥 Role dan Fitur-fiturnya

### 🏛 Admin
*Fitur:*
- Kelola data destinasi
- Kelola data guide
- Lihat dan kelola semua booking & review

### 🧑‍💼 Guide
*Fitur:*
- Lengkapi profil pribadi
- Daftar destinasi yang dilayani
- Lihat booking masuk
- Melihat review yang diberikan wisatawan

### 👤 Wisatawan
*Fitur:*
- Melihat daftar destinasi dan daftar guide
- Melihat profil guide
- Booking guide
- Memberi review pada guide yang dibooking

---

## 🗄 Tabel-Tabel Database

### 1. users

| Nama Field  | Tipe Data                           | Keterangan           |
| ----------- | ----------------------------------- | -------------------- |
| id          | BIGINT                       | Primary key (auto increment)         |
| name        | string                              | Nama pengguna        |
| email       | string                              | Email unik           |
| password    | string                              | Password terenkripsi |
| role        | enum('admin', 'wisatawan', 'guide') | Role pengguna        |
| created\_at | timestamp                           | tanggal dibuat             |
| updated\_at | timestamp                           | tanggal diperbarui             |


### 2. profiles

| Nama Field  | Tipe Data     | Keterangan                 |
| ----------- | ------------- | -------------------------- |
| id          | BIGINT | Primary key (auto increment)                |
| user\_id    | foreignId     | Relasi ke users          |
| phone       | string        | Nomor HP (opsional)        |
| address     | string        | Alamat pengguna (opsional) |
| created\_at | timestamp     | tanggal dibuat                   |
| updated\_at | timestamp     | tanggal diperbarui                   |


### 3. guides

| Nama Field  | Tipe Data     | Keterangan              |
| ----------- | ------------- | ----------------------- |
| id          | BIGINT | Primary key (auto increment)             |
| user\_id    | foreignId     | Relasi ke users       |
| bio         | text          | Deskripsi singkat guide |
| price       | decimal       | Harga layanan guide     |
| created\_at | timestamp     | tanggal dibuat                |
| updated\_at | timestamp     | tanggal diperbarui                |


### 4. destinations

| Nama Field  | Tipe Data     | Keterangan             |
| ----------- | ------------- | ---------------------- |
| id          | BIGINT | Primary key (auto increment)            |
| name        | string        | Nama destinasi         |
| description | text          | Deskripsi destinasi    |
| location    | string        | Lokasi destinasi       |
| image       | string        | Path gambar (opsional) |
| created\_at | timestamp     | tanggal dibuat               |
| updated\_at | timestamp     | tanggal diperbarui               |


### 5. destination_guide

| Nama Field      | Tipe Data     | Keterangan               |
| --------------- | ------------- | ------------------------ |
| id              | BIGINT | Primary key (auto increment)              |
| guide\_id       | foreignId     | Relasi ke guides       |
| destination\_id | foreignId     | Relasi ke destinations |
| created\_at     | timestamp     | tanggal dibuat                 |
| updated\_at     | timestamp     | tanggal diperbarui                 |


### 6. bookings

| Nama Field    | Tipe Data                               | Keterangan                    |
| ------------- | --------------------------------------- | ----------------------------- |
| id            | BIGINT                           | Primary key (auto increment)                  |
| user\_id      | foreignId                               | Relasi ke users (wisatawan) |
| guide\_id     | foreignId                               | Relasi ke guides            |
| booking\_date | date                                    | Tanggal booking               |
| status        | enum('pending', 'accepted', 'rejected') | Status                        |
| created\_at   | timestamp                               | tanggal dibuat                      |
| updated\_at   | timestamp                               | tanggal diperbarui                      |


### 7. reviews

| Nama Field  | Tipe Data     | Keterangan                    |
| ----------- | ------------- | ----------------------------- |
| id          | BIGINT | Primary key (auto increment)                  |
| user\_id    | foreignId     | Relasi ke users (wisatawan) |
| guide\_id   | foreignId     | Relasi ke guides            |
| comment     | text          | Komentar review               |
| created\_at | timestamp     | tanggal dibuat                      |
| updated\_at | timestamp     | tanggal diperbarui                      |


### 8. availabilities

| Nama Field      | Tipe Data     | Keterangan                  |
| --------------- | ------------- | --------------------------- |
| id              | BIGINT | Primary key (auto increment)                 |
| guide\_id       | foreignId     | Relasi ke guides          |
| available\_date | date          | Tanggal tersedia bagi guide |
| created\_at     | timestamp     | tanggal dibuat                    |
| updated\_at     | timestamp     | tanggal diperbarui                    |


---

## 🔗 Jenis relasi dan tabel yang berelasi

| Relasi           | Tabel yang Terlibat                                 | Jenis Relasi                                                                |
| ---------------- | --------------------------------------------------- | --------------------------------------------------------------------------- |
| **One to One**   | users → profiles                                | Satu user punya satu profil                                                 |
| **One to One**   | guides → users                                  | Satu guide adalah satu user                                                 |
| **One to Many**  | guides → availabilities                         | Satu guide punya banyak ketersediaan                                        |
| **Many to Many** | guides ↔ destinations (via destination_guide) | Satu guide melayani banyak destinasi, dan satu destinasi punya banyak guide |
| **One to Many**  | users → bookings                                | Satu wisatawan bisa membuat banyak booking                                  |
| **One to Many**  | guides → bookings                               | Satu guide bisa memiliki banyak booking                                     |
| **One to Many**  | users → reviews                                 | Satu wisatawan memberikan banyak review                                     |
| **One to Many**  | guides → reviews                                | Satu guide mendapat banyak review                                           |

