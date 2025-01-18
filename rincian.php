<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian Pesanan</title>
    <!-- Favicon -->
    <link href="img/Ava.png" rel="icon" />
    
    <link rel="stylesheet" href="./css/style_rincian.css">
</head>
<body>
    <div class="booking-container" id="booking-container">
        <h1>Rincian Pesanan</h1>

        <!-- Detail Pesanan -->
        <div class="detail-item">
            <strong>Nama:</strong> <span id="name"></span>
        </div>
        <div class="detail-item">
            <strong>Kontak WA:</strong> <span id="contact"></span>
        </div>
        <div class="detail-item">
            <strong>Moda Transportasi:</strong> <span id="mode"></span>
        </div>
        <div class="detail-item">
            <strong>Asal Keberangkatan:</strong> <span id="from"></span>
        </div>
        <div class="detail-item">
            <strong>Tujuan Keberangkatan:</strong> <span id="to"></span>
        </div>
        <div class="detail-item">
            <strong>Kelas:</strong> <span id="classType"></span>
        </div>
        <div class="detail-item">
            <strong>Provider:</strong> <span id="provider"></span>
            <!-- Tempat untuk logo provider -->
            <img id="garuda-logo" class="provider-logo" src="./img/garuda.png" alt="Garuda Logo" style="display:none;">
            <img id="lion-logo" class="provider-logo" src="./img/lion.png" alt="Lion Logo" style="display:none;">
        </div>
        <div class="detail-item">
            <strong>Jumlah Tiket:</strong> <span id="tickets"></span>
        </div>
        <div class="detail-item">
            <strong>Metode Pembayaran:</strong> <span id="payment"></span>
        </div>

        <!-- Tombol aksi -->
        <div class="action-buttons">
            <a href="index.php">Kembali</a>
            <a href="#" onclick="window.print()">Cetak Tiket</a>
        </div>
    </div>

    <script>
        // Ambil query string dari URL
        const params = new URLSearchParams(window.location.search);

        // Isi setiap elemen dengan data dari query string
        document.getElementById('name').textContent = params.get('name') || "Tidak ada data";
        document.getElementById('contact').textContent = params.get('contact') || "Tidak ada data";
        document.getElementById('mode').textContent = params.get('mode') || "Tidak ada data";
        document.getElementById('from').textContent = params.get('from') || "Tidak ada data";
        document.getElementById('to').textContent = params.get('to') || "Tidak ada data";

        // Ambil nilai kelas dan ubah menjadi teks yang sesuai
        const classValue = params.get('class');
        let classText = "Tidak ada data";

        if (classValue) {
            switch (classValue) {
                case '1':
                    classText = "Economy";
                    break;
                case '1.3':
                    classText = "Business";
                    break;
                case '1.5':
                    classText = "First Class";
                    break;
            }
        }

        document.getElementById('classType').textContent = classText;

        document.getElementById('provider').textContent = params.get('provider') || "Tidak ada data";
        document.getElementById('tickets').textContent = params.get('tickets') || "Tidak ada data";
        document.getElementById('payment').textContent = params.get('payment') || "Tidak ada data";

        // Cek jika moda adalah pesawat
        const mode = params.get('mode');
        if (mode && mode.toLowerCase() === 'pesawat') {
            // Tampilkan logo provider berdasarkan pilihan provider
            const provider = params.get('provider').toLowerCase();
            const garudaLogo = document.getElementById('garuda-logo');
            const lionLogo = document.getElementById('lion-logo');

            if (provider === 'garuda') {
                garudaLogo.style.display = 'block';  // Menampilkan logo Garuda
                lionLogo.style.display = 'none';    // Menyembunyikan logo Lion
            } else if (provider === 'lion') {
                lionLogo.style.display = 'block';   // Menampilkan logo Lion
                garudaLogo.style.display = 'none';  // Menyembunyikan logo Garuda
            }
        }
    </script>
</body>
</html>
