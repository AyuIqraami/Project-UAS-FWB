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
- Mengatur profil, bio, dan harga
- Daftar destinasi yang dilayani
- Menentukan tanggal ketersediaan dan kuota
- Lihat booking masuk
- Melihat review yang diberikan wisatawan

### 👤 Wisatawan
*Fitur:*
- Melihat daftar destinasi dan daftar guide
- Melihat profil guide
- Melakukan booking guide berdasarkan tanggal yang tersedia
- Memberi review pada guide yang dibooking

---

## 🗄 Tabel-Tabel Database

### 1. users

| Field      | Tipe Data       | Keterangan                    |
| ---------- | --------------- | ----------------------------- |
| id         | bigint (auto)   | Primary Key                   |
| name       | string          | Nama pengguna                 |
| email      | string (unique) | Email pengguna                |
| password   | string          | Password (terenkripsi)        |
| role       | enum(admin, wisatawan, guide)            | Role Pengguna |
| timestamps | timestamps      | created\_at dan updated\_at   |


### 2. profiles

| Field      | Tipe Data  | Keterangan                  |
| ---------- | ---------- | --------------------------- |
| id         | bigint     | Primary Key                 |
| user\_id   | foreignId  | Relasi ke users.id        |
| phone      | string     | Nomor telepon (nullable)    |
| address    | string     | Alamat (nullable)           |
| timestamps | timestamps | created\_at dan updated\_at |



### 3. guides

| Field      | Tipe Data  | Keterangan                  |
| ---------- | ---------- | --------------------------- |
| id         | bigint     | Primary Key                 |
| user\_id   | foreignId  | Relasi ke users.id        |
| bio        | text       | Deskripsi guide (nullable)  |
| price      | decimal    | Harga jasa guide            |
| timestamps | timestamps | created\_at dan updated\_at |



### 4. destinations

| Field       | Tipe Data  | Keterangan                  |
| ----------- | ---------- | --------------------------- |
| id          | bigint     | Primary Key                 |
| name        | string     | Nama destinasi              |
| description | text       | Deskripsi destinasi         |
| location    | string     | Lokasi                      |
| image       | string     | Path gambar (nullable)      |
| timestamps  | timestamps | created\_at dan updated\_at |



### 5. destination_guide

| Field           | Tipe Data  | Keterangan                  |
| --------------- | ---------- | --------------------------- |
| id              | bigint     | Primary Key                 |
| guide\_id       | foreignId  | Relasi ke guides.id       |
| destination\_id | foreignId  | Relasi ke destinations.id |
| timestamps      | timestamps | created\_at dan updated\_at |



### 6. bookings

| Field         | Tipe Data  | Keterangan                        |
| ------------- | ---------- | --------------------------------- |
| id            | bigint     | Primary Key                       |
| user\_id      | foreignId  | Relasi ke users.id (wisatawan)  |
| guide\_id     | foreignId  | Relasi ke guides.id             |
| booking\_date | date       | Tanggal booking                   |
| status        | enum(pending, accepted, rejected)       | Status Booking |
| timestamps    | timestamps | created\_at dan updated\_at       |


### 7. reviews

| Field      | Tipe Data  | Keterangan                       |
| ---------- | ---------- | -------------------------------- |
| id         | bigint     | Primary Key                      |
| user\_id   | foreignId  | Relasi ke users.id (wisatawan) |
| guide\_id  | foreignId  | Relasi ke guides.id            |
| comment    | text       | Isi komentar                     |
| timestamps | timestamps | created\_at dan updated\_at      |



### 8. availabilities

| Field           | Tipe Data  | Keterangan                                |
| --------------- | ---------- | ----------------------------------------- |
| id              | bigint     | Primary Key                               |
| guide\_id       | foreignId  | Relasi ke guides.id                     |
| available\_date | date       | Tanggal guide tersedia                    |
| max\_quota      | integer    | Kuota maksimal wisatawan pada tanggal tsb |
| timestamps      | timestamps | created\_at dan updated\_at               |



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

