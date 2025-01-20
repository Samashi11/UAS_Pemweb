    <!-- Header Start -->
    <div class="container-fluid page-header">
      <div class="container">
        <div
          class="d-flex flex-column align-items-center justify-content-center"
          style="min-height: 400px"
        >
          <h3 class="display-4 text-white text-uppercase">Packages</h3>
          <div class="d-inline-flex text-white">
            <p class="m-0 text-uppercase">
              <a class="text-white" href="#">Home</a>
            </p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
            <p class="m-0 text-uppercase">Packages</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Booking Start -->
    <div class="container-fluid booking mt-5 pb-5">
      <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px">
          <form action="tiket.php" method="get">
            <div class="row align-items-center" style="min-height: 60px">
              <div class="col-md-10">
                <div class="row">
                  <div class="col-md-4">
                    <div class="mb-3 mb-md-0">
                      <select
                        class="custom-select px-4"
                        style="height: 47px"
                        id="mode1"
                        name="mode"
                      >
                        <option selected hidden>Moda Transportasi</option>
                        <option value="pesawat">Pesawat</option>
                        <option value="kereta">Kereta</option>
                        <option value="kapal">Kapal</option>
                        <option value="bis">Bis</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3 mb-md-0">
                      <div class="date" id="date1" data-target-input="nearest">
                        <input
                          type="text"
                          class="form-control p-4 datetimepicker-input"
                          placeholder="Name"
                          name="name"
                          id="name1"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mb-3 mb-md-0">
                      <div class="date" id="date2" data-target-input="nearest">
                        <input
                          type="number"
                          class="form-control p-4 datetimepicker-input"
                          placeholder="Phone Number"
                          id="contact1"
                          name="contact"
                        />
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-md-3">
                  <div class="mb-3 mb-md-0">
                    <select class="custom-select px-4" style="height: 47px">
                      <option selected>Duration</option>
                      <option value="1">Duration 1</option>
                      <option value="2">Duration 1</option>
                      <option value="3">Duration 1</option>
                    </select>
                  </div>
                </div> -->
                </div>
              </div>
              <div class="col-md-2">
                <button
                  class="btn btn-primary btn-block"
                  type="submit"
                  style="height: 47px; margin-top: -2px"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Booking End -->

    <!-- Packages Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            Packages
          </h6>
          <h1>Pefect Tour Packages</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="img/bali1.jpg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >Bali</small
                  >
                  <small class="m-0"
                    ><i class="fa fas fa-plane-departure text-primary mr-2"></i
                    >Jakarta</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-ticket-alt text-primary mr-2"></i>Lion
                    Air</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="tiket.php"
                  >Nikmati keindahan pantai Bali</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">Rp. 575,923.40</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="img/bandung1.jpg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >Bandung</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-train text-primary mr-2"></i>Malang</small
                  >
                  <small class="m-0"
                    ><i class="fas fa-ticket-alt text-primary mr-2"></i>KAI
                    Eksekutif</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="tiket.php"
                  >Jelajahi suasana sejuknya kota Bandung</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">Rp. 246,901.93</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="img/surabaya.jpeg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >Surabaya</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-bus text-primary mr-2"></i>Bandung</small
                  >
                  <small class="m-0"
                    ><i class="fas fa-ticket-alt text-primary mr-2"></i>PO. Agra
                    Mas</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="tiket.php"
                  >Rasakan kehidupan kota terbesar di Jawa Timur</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">Rp. 177,375.54</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="img/jogja.jpg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >Yogyakarta</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-train text-primary mr-2"></i>Cirebon</small
                  >
                  <small class="m-0"
                    ><i class="fas fa-ticket-alt text-primary mr-2"></i
                    >Sritex</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="tiket.php"
                  >Temukan keajaiban budaya Yogyakarta
                </a>
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">Rp. 104,698.88</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="img/makassar.jpg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >Makassar</small
                  >
                  <small class="m-0"
                    ><i class="fa fa-ship text-primary mr-2"></i>Denpasar</small
                  >
                  <small class="m-0"
                    ><i class="fas fa-ticket-alt text-primary mr-2"></i>Meratus
                    Line</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="tiket.php"
                  >Jelajahi pantai Losari yang terkenal</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">Rp. 131,124.28</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="package-item bg-white mb-2">
              <img class="img-fluid" src="img/medan.jpg" alt="" />
              <div class="p-4">
                <div class="d-flex justify-content-between mb-3">
                  <small class="m-0"
                    ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                    >Medan</small
                  >
                  <small class="m-0"
                    ><i class="fas fa-plane-departure text-primary mr-2"></i
                    >Yogyakarta</small
                  >
                  <small class="m-0"
                    ><i class="fas fa-ticket-alt text-primary mr-2"></i
                    >Sriwijaya Air</small
                  >
                </div>
                <a class="h5 text-decoration-none" href="tiket.php"
                  >Kunjungi Medan untuk melihat Danau Toba</a
                >
                <div class="border-top mt-4 pt-4">
                  <div class="d-flex justify-content-between">
                    <h6 class="m-0">
                      <i class="fa fa-star text-primary mr-2"></i>4.5
                      <small>(250)</small>
                    </h6>
                    <h5 class="m-0">Rp. 1,133,114.39</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Packages End -->

    <!-- Destination Start -->
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
          <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            Destination
          </h6>
          <h1>Explore Top Destination</h1>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img class="img-fluid" src="img/bali.jpg" alt="" />
              <a
                class="destination-overlay text-white text-decoration-none"
                href=""
              >
                <h5 class="text-white">Bali</h5>
                <span class="text-center">Pulau Dewata yang terkenal</span>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img class="img-fluid" src="img/jogja1.jpg" alt="" />
              <a
                class="destination-overlay text-white text-decoration-none"
                href=""
              >
                <h5 class="text-white">Yogyakarta</h5>
                <span class="text-center">Pusat seni dan budaya Jawa</span>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img class="img-fluid" src="img/jkt.jpg" alt="" />
              <a
                class="destination-overlay text-white text-decoration-none"
                href=""
              >
                <h5 class="text-white">Jakarta</h5>
                <span class="text-center"
                  >Pusat Perbelanjaan dan budaya modern</span
                >
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img class="img-fluid" src="img/bandung.jpg" alt="" />
              <a
                class="destination-overlay text-white text-decoration-none"
                href=""
              >
                <h5 class="text-white">Bandung</h5>
                <span class="text-center">Kota sejuk di dataran tinggi</span>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img class="img-fluid" src="img/lmbk.jpg" alt="" />
              <a
                class="destination-overlay text-white text-decoration-none"
                href=""
              >
                <h5 class="text-white">Lombok</h5>
                <span class="text-center"
                  >Pulau Tropis dengan pantai menawan</span
                >
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div
              class="destination-item position-relative overflow-hidden mb-2"
            >
              <img class="img-fluid" src="img/sumut.jpg" alt="" />
              <a
                class="destination-overlay text-white text-decoration-none"
                href=""
              >
                <h5 class="text-white">Sumatera Utara</h5>
                <span class="text-center"
                  >Rumah bagi Danau Toba, dan budaya Batak yang kaya</span
                >
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Destination End -->

