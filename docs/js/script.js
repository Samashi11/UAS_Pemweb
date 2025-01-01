const cityCoordinates = {
  pesawat: {
    "Jakarta Bandara Soekarno-Hatta": { lat: -6.2088, lon: 106.8456 },
    "Surabaya Bandara Juanda": { lat: -7.3594, lon: 112.7874 },
    "Bali Bandara Ngurah Rai": { lat: -8.7482, lon: 115.1676 },
    "Bandung Bandara Husein Sastranegara": { lat: -6.9336, lon: 107.6069 },
    "Medan Bandara Kualanamu": { lat: 3.6167, lon: 98.925 },
    "Yogyakarta Bandara Adisutjipto": { lat: -7.7839, lon: 110.4261 },
    "Makassar Bandara Sultan Hasanuddin": { lat: -5.0619, lon: 119.5374 },
    "Denpasar Bandara Ngurah Rai": { lat: -8.7482, lon: 115.1676 },
    "Surakarta Bandara Adi Sumarmo": { lat: -7.5354, lon: 110.7601 },
    "Palembang Bandara Sultan Mahmud Badaruddin II": {
      lat: -2.9874,
      lon: 104.7461,
    },
    "Lombok Bandara Internasional Zainuddin Abdul Majid": {
      lat: -8.7573,
      lon: 116.2767,
    },
  },
  kereta: {
    "Jakarta Gambir Station": { lat: -6.9731, lon: 106.8225 },
    "Surabaya Gubeng Station": { lat: -7.2611, lon: 112.7486 },
    "Bandung Kiaracondong Station": { lat: -6.93, lon: 107.6537 },
    "Yogyakarta Tugu Station": { lat: -7.8011, lon: 110.3642 },
    "Semarang Tawang Station": { lat: -6.9086, lon: 110.409 },
    "Tangerang Sudirman Station": { lat: -6.166, lon: 106.6297 },
    "Cirebon Prujakan Station": { lat: -6.7018, lon: 108.5584 },
    "Purwokerto Station": { lat: -7.438, lon: 109.231 },
    "Sidoarjo Station": { lat: -7.4467, lon: 112.7373 },
    "Malang Kotabaru Station": { lat: -7.9795, lon: 112.632 },
  },
  kapal: {
    "Surabaya Tanjung Perak Port": { lat: -7.2504, lon: 112.7688 },
    "Makassar Soekarno-Hatta Port": { lat: -5.1477, lon: 119.4327 },
    "Denpasar Gilimanuk Port": { lat: -8.6538, lon: 115.2167 },
    "Belawan Port (Medan)": { lat: 3.8353, lon: 98.6673 },
    "Jakarta Tanjung Priok Port": { lat: -6.1245, lon: 106.8775 },
    "Banjarmasin Port": { lat: -3.3195, lon: 114.5938 },
    "Surabaya Ujung Port": { lat: -7.2296, lon: 112.7264 },
    "Makassar Panrang Luhu Port": { lat: -5.1482, lon: 119.4333 },
    "Palembang Boom Baru Port": { lat: -3.0856, lon: 104.747 },
    "Semarang Tanjung Emas Port": { lat: -6.9795, lon: 110.4212 },
    "Lampung (Bandar Lampung) Panjang Port": { lat: -5.5495, lon: 105.245 },
    "Pelabuhan Lembar (Lombok)": { lat: -8.7237, lon: 116.0676 },
  },
  bis: {
    "Jakarta Pulogadung Terminal": { lat: -6.2304, lon: 106.8965 },
    "Surabaya Bungurasih Terminal": { lat: -7.3144, lon: 112.7495 },
    "Bandung Leuwipanjang Terminal": { lat: -6.9494, lon: 107.61 },
    "Yogyakarta Giwangan Terminal": { lat: -7.7999, lon: 110.3742 },
    "Medan Amplas Terminal": { lat: 3.5427, lon: 98.6741 },
    "Bali Ubung Terminal": { lat: -8.6053, lon: 115.2067 },
    "Makassar Terminal Makassar": { lat: -5.1482, lon: 119.4329 },
    "Denpasar Mengwi Terminal": { lat: -8.6153, lon: 115.1798 },
    "Palembang Terminal Alang-Alang Lebar": { lat: -2.9507, lon: 104.7005 },
    "Semarang Terboyo Terminal": { lat: -6.9639, lon: 110.4098 },
    "Tangerang Terminal Poris Plawad": { lat: -6.1645, lon: 106.6326 },
    "Malang Arjosari Terminal": { lat: -7.9795, lon: 112.6325 },
    "Cirebon Prujakan Terminal": { lat: -6.7018, lon: 108.5584 },
    "Surakarta Tirtonadi Terminal": { lat: -7.5667, lon: 110.8183 },
    "Bandung Cicaheum Terminal": { lat: -6.9317, lon: 107.6304 },
  },
};

const providerData = {
  pesawat: {
    "Garuda Indonesia": { name: "Garuda Indonesia", markup: 1.3 },
    "Lion Air": { name: "Lion Air", markup: 1.0 },
    AirAsia: { name: "AirAsia", markup: 0.8 },
    "Sriwijaya Air": { name: "Sriwijaya Air", markup: 1.05 },
  },
  kereta: {
    "Kereta Api Indonesia": { name: "Kereta Api Indonesia", markup: 1.0 },
    "Argo Parahyangan": { name: "Argo Parahyangan", markup: 1.05 },
    "KAI Eksekutif": { name: "KAI Eksekutif", markup: 1.1 },
    Sritex: { name: "Sritex", markup: 1.12 },
  },
  kapal: {
    Pelni: { name: "Pelni", markup: 1.0 },
    "Meratus Line": { name: "Meratus Line", markup: 1.08 },
    ASDP: { name: "ASDP", markup: 0.7 },
    "Wihan Artha": { name: "Wihan Artha", markup: 1.2 },
  },
  bis: {
    "PO. Sinar Jaya": { name: "PO. Sinar Jaya", markup: 1.0 },
    "PO. Gunung Harta": { name: "PO. Gunung Harta", markup: 1.01 },
    "PO. Pahala Kencana": { name: "PO. Pahala Kencana", markup: 1.05 },
    "PO. Agra Mas": { name: "PO. Agra Mas", markup: 1.04 },
  },
};

const pricePerKm = {
  pesawat: 600, // Harga per km untuk pesawat
  kereta: 400, // Harga per km untuk kereta
  kapal: 200, // Harga per km untuk kapal
  bis: 300, // Harga per km untuk bus
};

// Fungsi untuk memperbarui kota asal dan tujuan berdasarkan moda transportasi
const classMapping = {
  1: "Economy",
  1.5: "Business",
  2.5: "First Class",
};

function updateCities(mode) {
  const fromSelect = document.getElementById("from");
  const toSelect = document.getElementById("to");
  const cities = cityCoordinates[mode]
    ? Object.keys(cityCoordinates[mode])
    : [];

  // Reset pilihan kota
  fromSelect.innerHTML = '<option value="">Pilih Kota Asal</option>';
  toSelect.innerHTML = '<option value="">Pilih Kota Tujuan</option>';

  // Tambahkan pilihan kota pada asal dan tujuan
  cities.forEach((city) => {
    const option = document.createElement("option");
    option.value = city;
    option.textContent = city;
    fromSelect.appendChild(option);
    toSelect.appendChild(option.cloneNode(true));
  });

  // Aktifkan/Nonaktifkan dropdown
  fromSelect.disabled = cities.length === 0;
  toSelect.disabled = cities.length === 0;
}

function updateProviders(mode) {
  const providerSelect = document.getElementById("provider");
  const providers = providerData[mode] || {};

  providerSelect.innerHTML = '<option value="">Pilih Provider</option>';

  // Menambahkan provider ke dropdown
  Object.keys(providers).forEach((provider) => {
    const option = document.createElement("option");
    option.value = provider;
    option.textContent = providers[provider].name;
    providerSelect.appendChild(option);
  });

  // Aktifkan/Nonaktifkan dropdown provider
  providerSelect.disabled = Object.keys(providers).length === 0;
}

function calculateDistance(from, to, mode) {
  const fromCoords = cityCoordinates[mode]?.[from];
  const toCoords = cityCoordinates[mode]?.[to];

  if (!fromCoords || !toCoords) return 0;

  const R = 6371; // Radius Bumi dalam km
  const dLat = ((toCoords.lat - fromCoords.lat) * Math.PI) / 180;
  const dLon = ((toCoords.lon - fromCoords.lon) * Math.PI) / 180;
  const a =
    Math.sin(dLat / 2) ** 2 +
    Math.cos((fromCoords.lat * Math.PI) / 180) *
      Math.cos((toCoords.lat * Math.PI) / 180) *
      Math.sin(dLon / 2) ** 2;
  const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

  return R * c;
}

function calculateAndDisplayPrice() {
  const mode = document.getElementById("mode").value;
  const from = document.getElementById("from").value;
  const to = document.getElementById("to").value;
  const provider = document.getElementById("provider").value;
  const classMultiplierValue = document.getElementById("class").value;
  const tickets = parseInt(document.getElementById("tickets").value, 10);

  const priceDisplay = document.getElementById("price-display");

  // Validasi input
  if (
    !mode ||
    !from ||
    !to ||
    !provider ||
    isNaN(classMultiplierValue) ||
    isNaN(tickets) ||
    tickets <= 0
  ) {
    priceDisplay.textContent =
      "Silakan lengkapi semua pilihan untuk melihat harga.";
    return;
  }

  // Mapping nama kelas berdasarkan value
  const classMultiplier = parseFloat(classMultiplierValue);
  const className = classMapping[classMultiplierValue] || "Unknown";

  // Menghitung harga
  const distance = calculateDistance(from, to, mode);
  const providerMarkup = providerData[mode]?.[provider]?.markup || 1;
  const basePrice = distance * (pricePerKm[mode] || 0);
  const totalPrice = basePrice * providerMarkup * classMultiplier * tickets;

  // Menampilkan total harga
  priceDisplay.innerHTML = `
        <p>Total Harga (${className}): ${formatCurrency(totalPrice)}</p>
    `;
}

function formatCurrency(amount) {
  return `Rp ${amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,")}`;
}

// Event Listeners untuk perubahan input
["change", "input"].forEach((event) => {
  ["mode", "from", "to", "provider", "class", "tickets"].forEach((id) => {
    const element = document.getElementById(id);
    if (element) element.addEventListener(event, calculateAndDisplayPrice);
  });
});

// Event Listener untuk update kota dan provider saat mode berubah
document.getElementById("mode")?.addEventListener("change", (event) => {
  const mode = event.target.value;
  updateCities(mode);
  updateProviders(mode);
});

// Ambil query string dari URL
const params = new URLSearchParams(window.location.search);

// Isi setiap elemen dengan data dari query string
document.getElementById("name").value =
  params.get("name") || "";
document.getElementById("contact").value =
  params.get("contact") || "";
document.getElementById("mode").value =
  params.get("mode") || "";
document.getElementById("from").value =
  params.get("from") || "";
document.getElementById("to").value =
  params.get("to") || "";


console.log(document.getElementById("mode"));


function change() {
	console.log(document.getElementById("mode").value);
}