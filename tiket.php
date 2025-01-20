<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Booking Form</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Favicon -->
    <link href="img/Ava.png" rel="icon" />
    <link rel="stylesheet" href="./css/style2.css" />
  </head>
  <body>
    <div class="booking-container">
      <a href="index.php" class="back">
				<i class="fas fa-backward" aria-hidden="true"></i>
			</a>
      <h1>Travel Booking Form</h1>
      <form id="order-form" action="rincian.php" method="get">
        <!-- Input Nama -->
        <div class="form-group">
          <label for="name">Nama:</label>
          <input
            type="text"
            id="name"
            name="name"
            required
						autocomplete="name"
            placeholder="Masukkan Nama"
						onchange="change()"
          />
        </div>

        <!-- Input Kontak WA -->
        <div class="form-group">
          <label for="contact">Kontak WA:</label>
          <input
            type="text"
            id="contact"
            name="contact"
            required
            placeholder="Masukkan Kontak WA"
          />
        </div>

        <!-- Pilihan Moda Transportasi -->
        <div class="form-group">
          <label for="mode">Moda Yang Digunakan:</label>
          <select id="mode" name="mode" required onchange="change()">
            <option value="">Pilih Moda Transportasi</option>
            <option value="pesawat">Pesawat</option>
            <option value="kereta">Kereta</option>
            <option value="kapal">Kapal</option>
            <option value="bis">Bis</option>
          </select>
        </div>

        <!-- Pilihan Kota Asal -->
        <div class="form-group">
          <label for="from">Asal Keberangkatan:</label>
          <select id="from" name="from" required disabled>
            <option value="">Pilih Asal Keberangkatan</option>
          </select>
        </div>

        <!-- Pilihan Kota Tujuan -->
        <div class="form-group">
          <label for="to">Tujuan Keberangkatan:</label>
          <select id="to" name="to" required disabled>
            <option value="">Pilih Tujuan Keberangkatan</option>
          </select>
        </div>

        <!-- Pilihan Kelas -->
        <div class="form-group">
          <label for="class">Pilih Kelas:</label>
          <select id="class" name="class" required>
            <option value="1">Economy</option>
            <option value="1.3">Business</option>
            <option value="1.5">First Class</option>
          </select>
        </div>

        <!-- Pilihan Provider -->
        <div class="form-group">
          <label for="provider">Provider Yang Tersedia:</label>
          <select id="provider" name="provider" required disabled>
            <option value="">Pilih Provider</option>
          </select>
        </div>


        <div class="form-group">
          <label for="jadwal">Pilih waktu Keberangkatan</label>
          <select id="jadwal" name="jadwal" required >
            <option value="Pagi 07.00 WIB">Pagi 07.00</option>
            <option value="Siang 13.00 WIB">Siang 13.00</option>
            <option value="Malam 20.00 WIB">Malam 20.00</option>
          </select>
        </div>

        <div class="form-group">
        <label for="tanggal">Pilih Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal">
        </div>

        <!-- Input Jumlah Tiket -->
        <div class="form-group">
          <label for="tickets">Jumlah Tiket:</label>
          <input
            type="number"
            id="tickets"
            name="tickets"
            required
            min="1"
            value="1"
            placeholder="Masukkan Jumlah Tiket"
          />
        </div>

        <!-- Harga Total -->
        <div id="price-display" class="price-display">
          Total Harga Akan Ditampilkan di Sini
        </div>

        <!-- Pilihan Metode Pembayaran -->
        <div class="form-group">
          <label for="payment">Metode Pembayaran:</label>
          <select id="payment" name="payment" required>
            <option value="">Pilih Metode Pembayaran</option>
            <option value="transfer">Transfer Bank</option>
            <option value="cod">Cash On Delivery (COD)</option>
            <option value="e-wallet">E-Wallet (OVO, GoPay, dll)</option>
          </select>
        </div>

        <!-- Tombol Konfirmasi -->
        <div class="form-group">
          <button type="submit">Konfirmasi Pesanan</button>
        </div>
      </form>
    </div>

    <script src="./js/script.js"></script>
  </body>
</html>
