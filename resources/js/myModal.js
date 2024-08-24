// Get modal element
var modal = document.getElementById("myModal");

// Get open modal button
var openModalBtn = document.getElementById("openModalBtn");

// Get close button
var closeBtn = document.querySelector(".close-btn");

// Listen for open click
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Listen for close click
closeBtn.onclick = function() {
    modal.style.display = "none";
}

// Listen for outside click
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

document.querySelectorAll('.nav-menu .menu-item').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('.nav-menu .menu-item').forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const currentPage = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav-menu .menu-item').forEach(item => {
        if (item.getAttribute('href') === currentPage) {
            item.classList.add('active');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.category-button');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Hapus kelas 'active' dari semua tombol
            categoryButtons.forEach(btn => btn.classList.remove('active'));

            // Tambahkan kelas 'active' ke tombol yang diklik
            button.classList.add('active');
        });
    });
});

document.getElementById('recommendation-select').addEventListener('change', function () {
    if (this.value !== "") {
        this.classList.add('active'); // Tambahkan kelas aktif jika ada opsi yang dipilih
    } else {
        this.classList.remove('active'); // Hapus kelas aktif jika tidak ada opsi yang dipilih
    }
});

$(document).ready(function() {
    $('.select2').select2({
        width: '100%' // memastikan dropdown mengisi seluruh lebar kontainer
    });
});


