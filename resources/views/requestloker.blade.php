<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AyoKerja.co</title>
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('/js/app.js') }}" defer></script>
</head>


<body>
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <div class="logo">
                <img src="{{ asset('assets/images/LOGO.png') }}" class="img-fluid" alt="AyoKerja.co">
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Pelatihan</a></li>
                    <li class="dropdown">
                        <a href="#">Info Loker</a>
                        <div class="dropdown-content">
                            <a href="#">Request Loker</a>
                            <a href="#">Loker</a>
                        </div>
                    </li>
                    <li><a href="#">CV</a></li>
                    <li><a href="#">Forum Diskusi</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </nav>
            <div class="auth-buttons">
                <button class="btn-login">Masuk</button>
                <button class="btn-company">Untuk Perusahaan</button>
            </div>
        </header>

        <!-- Search Section -->
        <div class="search-section">
            <input type="text" placeholder="Pelatihan, Webinar, Layanan tanya, Loker ......">
            <button class="btn-search">CARI</button>
        </div>

        <!-- Recommendation Section -->
        <section class="recommendation-section">
            <div class="recommendation-banner">
                <p>Daptkan Rekomdeasi Lowongan Anda dengan detail!</p>
                <button class="btn-fill-profile">ChatAdmin</button>
            </div>
            <div class="recommendation-preference">
                <img src="{{ asset('assets/images/people.png') }}" alt="Recommendation Image" class="img-fluid" style="width: 100%; max-width: 500px; height: auto;">
                <div>
                    <p>Dapatkan Lowongan Sesuai Preferensi Anda!</p>
                    <a href="javascript:void(0);" class="btn-fill-preference" onclick="openModal()">Isi Preferensi</a>
                </div>
            </div>
        </section>

        <!-- Job Categories Section -->
        <section class="job-categories">
            <h2>Lowongan Kerja Favorite</h2>
            <div class="category-buttons">
                <button>Penjualan</button>
                <button>Pemasaran</button>
                <button>Administrasi</button>
                <button>Edukasi</button>
                <button>Akuntansi</button>
                <button>Keuangan</button>
                <button>Bagian Umum</button>
                <button>Fresh Graduate</button>
                <button>Layanan</button>
                <button>Non Formal</button>
            </div>
        </section>
        

        <!-- Favorite Industries Section -->
        <section class="favorite-industries">
            <h2>Industri Favorite</h2>
            <div class="industry-buttons">
                <button>Keuangan</button>
                <button>Ritel</button>
                <button>Manufaktur</button>
                <button>Servis</button>
                <button>Logistik</button>
                <button>Transportasi</button>
                <button>Pendidikan</button>
                <button>IT</button>
                <button>Telekomunikasi</button>
                <button>Kesehatan</button>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-links">
                    <h3>Tentang AyoKerja.co</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Perusahaan</h3>
                    <ul>
                        <li><a href="#">Daftar gratis</a></li>
                        <li><a href="#">Pasang iklan lowongan kerja</a></li>
                        <li><a href="#">Iklan Pelatihan</a></li>
                        <li><a href="#">Melakukan Webinar</a></li>
                        <li><a href="#">Privacy & Keamanan</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Pencari Kerja</h3>
                    <ul>
                        <li><a href="#">Info Loker</a></li>
                        <li><a href="#">Request Loker</a></li>
                        <li><a href="#">Lihat Profil</a></li>
                        <li><a href="#">Lamaran Kerja</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Jelajahi Pekerjaan</a></li>
                        <li><a href="#">Course</a></li>
                        <li><a href="#">Tes Minat Bakat</a></li>
                        <li><a href="#">Psikotes</a></li>
                        <li><a href="#">Webinar</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-social">
                <h3>Sosial Media:</h3>
                <img src="{{ asset('assets/images/facebook.png') }}" alt="Social Media Icon 1" class="img-fluid">
                <img src="{{ asset('assets/images/instagram.png') }}" alt="Social Media Icon 2" class="img-fluid">
                <img src="{{ asset('assets/images/twitter.png') }}" alt="Social Media Icon 3" class="img-fluid">
                <img src="{{ asset('assets/images/linkedin.png') }}" alt="Social Media Icon 4" class="img-fluid">
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 AyoKerja.co. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <!-- Modal Structure -->
    <div id="preferenceModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Isi Preferensi</h2>
            <p>Silakan isi preferensi Anda di bawah ini. Jawab pertanyaan-pertanyaan berikut untuk membantu kami memahami kebutuhan Anda dengan lebih baik:</p>
            <form>
                <label for="question1">Pilih Posisi Pekerjaan</label>
                <select id="question1" name="question1" required>
                    <option value="" disabled selected>Pilih posisi pekerjaan</option>
                    <option value="option1">Accountant</option>
                    <option value="option2">Administrative Assistant</option>
                    <option value="option3">Agricultural Engineer</option>
                    <option value="option3">Architect</option>
                    <option value="option3">Auditor</option>
                    <option value="option3">Bank Teller</option>
                    <option value="option3">Business Analyst</option>
                    <option value="option3">Bellboy (Pembawa Barang)</option>
                    <option value="option3">Building Maintenance (Pemeliharaan Gedung)</option>
                    <option value="option3">Chef</option>
                    <option value="option3">Cleaning Service (Petugas Kebersihan)</option>
                    <option value="option3">Civil Engineer</option>
                    <option value="option3">Content Writer</option>
                    <option value="option3">Copywriter</option>
                    <option value="option3">Customer Service Representative</option>
                    <option value="option3">Data Analyst</option>
                    <option value="option3">Dry Cleaner (Pencuci Kering)</option>
                    <option value="option3">Dishwasher (Pencuci Piring)</option>
                    <option value="option3">Digital Marketing Specialist</option>
                    <option value="option3">Doctor</option>
                    <option value="option3">Electrical Engineer</option>
                    <option value="option3">Environmental Engineer</option>
                    <option value="option3">Event Planner</option>
                    <option value="option3">Financial Analyst</option>
                    <option value="option3">Fumigator (Fumigasi)</option>
                    <option value="option3">Graphic Designer</option>
                    <option value="option3">Garbage Collector (Pengumpul Sampah)</option>
                    <option value="option3">Gardener (Tukang Kebun)</option>
                    <option value="option3">General Maintenance Worker (Pekerja Pemeliharaan Umum)</option>
                    <option value="option3">Groundskeeper (Penjaga Lahan)</option>
                    <option value="option3">Health and Safety Officer</option>
                    <option value="option3">Hotel Manager</option>
                    <option value="option3">Housekeeper (Pengurus Rumah Tangga)</option>
                    <option value="option3">HR Specialist (Human Resources)</option>
                    <option value="option3">IT Support Specialist</option>
                    <option value="option3">Interior Designer</option>
                    <option value="option3">Journalist</option>
                    <option value="option3">Lecturer</option>
                    <option value="option3">Legal Advisor</option>
                    <option value="option3">Logistics Coordinator</option>
                    <option value="option3">Marine Engineer</option>
                    <option value="option3">Marketing Manager</option>
                    <option value="option3">Network Administrator</option>
                    <option value="option3">Nurse</option>
                    <option value="option3">Operations Manager</option>
                    <option value="option3">Pharmacist</option>
                    <option value="option3">Pool Attendant (Petugas Kolam Renang)</option>
                    <option value="option3">Porter (Tukang Angkut)</option>
                    <option value="option3">Procurement Specialist</option>
                    <option value="option3">Product Manager</option>
                    <option value="option3">Project Manager</option>
                    <option value="option3">Public Relations Specialist</option>
                    <option value="option3">Quality Assurance Specialist</option>
                    <option value="option3">Retail Store Manager</option>
                    <option value="option3">Room Attendant (Petugas Kamar Hotel)</option>
                    <option value="option3">Sales Executive</option>
                    <option value="option3">Social Media Manager</option>
                    <option value="option3">Software Engineer</option>
                    <option value="option3">Teacher</option>
                    <option value="option3">Translator/Interpreter</option>
                    <option value="option3">Travel Agent</option>
                    <option value="option3">UI/UX Designer</option>
                    <option value="option3">Warehouse Manager</option>
                    <option value="option3">Web Developer</option>
                    <!-- <option value="option3">Mechanical Engineer</option> -->
                </select>
                
                <label for="question2">Jenjang Karir</label>
                <select id="question2" name="question2" required>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="option1">Pemula/staf</option>
                    <option value="option2">Manager/Departemen</option>
                    <option value="option3">Manager/Cabang-Regional</option>
                    <option value="option3">Asisten Manager Senior</option>
                    <option value="option3">Manager Senior</option>
                    <option value="option3">General Manager</option>
                    <option value="option3">Direktur</option>
                    <option value="option3">Presiden Direktur</option>
                </select>
                
                <label for="question3">Tipe Pekerjaan</label>
                <select id="question3" name="question3" required>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="option1">FullTime</option>
                    <option value="option2">PartTime</option>
                    <option value="option3">Freelance</option>
                </select>
                
                <label for="question4">Lokasi</label>
                <select id="question4" name="question4" class="select2" required>
                    <option value="" disabled selected>Pilih salah satu</option>
                    <option value="Aceh">Aceh</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                    <option value="Sumatera Barat">Sumatera Barat</option>
                    <option value="Riau">Riau</option>
                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                    <option value="Jambi">Jambi</option>
                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                    <option value="Bangka Belitung">Bangka Belitung</option>
                    <option value="Bengkulu">Bengkulu</option>
                    <option value="Lampung">Lampung</option>
                    <option value="DKI Jakarta">DKI Jakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Banten">Banten</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="DI Yogyakarta">DI Yogyakarta</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Bali">Bali</option>
                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                    <option value="Gorontalo">Gorontalo</option>
                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                    <option value="Maluku">Maluku</option>
                    <option value="Maluku Utara">Maluku Utara</option>
                    <option value="Papua">Papua</option>
                    <option value="Papua Barat">Papua Barat</option>
                    <option value="Papua Selatan">Papua Selatan</option>
                    <option value="Papua Tengah">Papua Tengah</option>
                    <option value="Papua Pegunungan">Papua Pegunungan</option>
                </select>

                
                <label for="question5">Gaji yang diinginkan</label>
                <input type="text" id="question5" name="question5" placeholder="Masukan range gaji yang anda inginkan!" required>
                
                <div class="modal-buttons">
                    <button type="submit" class="btn-submit">Cari</button>
                    <button type="button" class="btn-cancel" onclick="closeModal()">Batal</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Function to open the modal
        function openModal() {
            document.getElementById('preferenceModal').style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('preferenceModal').style.display = 'none';
        }

        // Add event listener to the button that triggers the modal
        document.querySelector('.btn-fill-preference').addEventListener('click', openModal);

        // Add event listener to close the modal when clicking outside of the modal content
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                closeModal();
            }
        }
    </script>
</body>

</html>
<script>
    $(document).ready(function() {
        // Inisialisasi Select2 dengan placeholder dan template custom
        $('#question1').select2({
            placeholder: "Pilih posisi pekerjaan atau ketik untuk mencari",
            allowClear: true,
            templateResult: function(data) {
                if (!data.id) {
                    return $('<span class="select2-placeholder">Pilih posisi pekerjaan atau ketik untuk mencari</span>');
                }
                return data.text;
            },
            templateSelection: function(data) {
                if (data.id === '') { 
                    return 'Pilih posisi pekerjaan atau ketik untuk mencari'; // Tampilkan placeholder di dropdown terpilih
                }
                return data.text;
            }
        });
    });
    const categoryButtons = document.querySelectorAll('.category-button');
        categoryButtons.forEach(button) => {
            button.addEventListener('click', () => {
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
            });
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                    navLinks.forEach(item => item.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
    <script>
    // Add active state to job category buttons
    const categoryButtons = document.querySelectorAll('.category-button');
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            // Tambahkan aksi sesuai kebutuhan, misalnya navigasi atau filter konten
            console.log(`You clicked on: ${button.textContent}`);
        });
    });
</script>

<script>
    // For job categories
    document.querySelectorAll('.category-buttons button').forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons in job categories
            document.querySelectorAll('.category-buttons button').forEach(btn => btn.classList.remove('active'));

            // Add active class to the clicked button
            button.classList.add('active');
        });
    });

    // For favorite industries
    document.querySelectorAll('.industry-buttons button').forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons in favorite industries
            document.querySelectorAll('.industry-buttons button').forEach(btn => btn.classList.remove('active'));

            // Add active class to the clicked button
            button.classList.add('active');
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuIcon = document.querySelector('.menu-icon');
        const navMenu = document.querySelector('.nav-menu');

        menuIcon.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Optional: Close menu when clicking outside of it
        document.addEventListener('click', function(event) {
            if (!navMenu.contains(event.target) && !menuIcon.contains(event.target)) {
                navMenu.classList.remove('active');
            }
        });
    });
</script>

</body>
</script>

