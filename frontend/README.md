# Helpdesk Frontend - Praktikum Web 2

Proyek frontend berbasis Vue 3 dan Vite untuk modul praktikum manajemen tiket helpdesk.

## Informasi Lingkungan & Versi
- **Node.js**: v20.x / v22.x (Aktif)
- **Vue**: v3.x
- **Vite**: v5.x / v6.x

## Perintah Instalasi & Menjalankan Proyek
- **Instalasi Dependensi**: `npm install`
- **Menjalankan Server Development**: `npm run dev`
- **Build untuk Production**: `npm run build`

## Struktur Komponen
- `App.vue`: Komponen induk utama yang memegang state global (`tickets`, `selectedStatus`, `filteredTickets`, dll).
- `TicketList.vue`: Komponen perantara untuk menampung daftar kartu tiket.
- `TicketCard.vue`: Komponen turunan untuk menampilkan detail setiap tiket dan tombol aksi status.
- `TicketForm.vue`: Komponen untuk menambah tiket baru dengan sistem validasi draft.
- `BasePanel.vue`: Komponen pembungkus berbasis slot untuk layout panel.
- `TicketStatus.vue`: Komponen badge status tiket yang digunakan di setiap kartu.

## Tabel Props & Emits
- **TicketCard**:
  - Props: `ticket` (Object)
  - Emits: `advance` (mengirim ID tiket untuk melanjutkan status)
- **TicketForm**:
  - Emits: `submit` (mengirim objek data tiket baru)

## Ownership State
- Seluruh state utama (seperti array `tickets` dan filter aktif) dikelola secara terpusat di komponen induk (`App.vue`) menggunakan prinsip reaktivitas Vue. Komponen anak hanya menerima data melalui *props* dan memodifikasi data melalui *emits*.

## Perilaku Reset, Filter, & Refresh
- **Filter**: Mengubah pilihan status secara reaktif menyaring data yang ditampilkan tanpa mengubah total data asli di memori.
- **Refresh**: Mengembalikan data tiket dan kondisi aplikasi kembali ke data awal.
- **Reset Form**: Menutup dan membuka kembali form akan mengosongkan draft lokal dan mengembalikan fokus ke elemen judul.

## Ringkasan Hasil Kasus Uji (TC)
- **TC-01 s.d. TC-04**: Berhasil menguji data awal, reaktivitas filter, dan perubahan status tiket.
- **TC-05 s.d. TC-08**: Berhasil menguji kondisi kosong (*empty state*), pemisahan draft form, proses *submit* sah, serta integritas *payload*.
- **TC-09 s.d. TC-12**: Berhasil menguji validasi spasi/kosong, batas karakter input, validasi checkbox, dan siklus hidup (*lifecycle*) komponen.
- **TC-13 s.d. TC-16**: Berhasil menguji penggunaan *slot*, pemantauan *watch*, audit aturan *props* (tanpa mutasi langsung), serta proses *build* production yang lulus tanpa *error*.

## Versi & Bukti Devtools
- Pengujian interaksi komponen, state reaktif, props, dan event telah divalidasi menggunakan panel Vue Devtools sesuai lampiran bukti tangkapan layar.

## Batasan Validasi & Catatan Backend
- **Batas Validasi Frontend**: Validasi input teks, panjang karakter, dan checkbox ditangani secara lokal pada komponen form sebelum proses *submit*.
- **Catatan Data**: Aplikasi saat ini beroperasi menggunakan data memori lokal (*in-memory*) pada frontend dan belum terhubung secara penuh ke endpoint database API backend Laravel untuk penyimpanan permanen.