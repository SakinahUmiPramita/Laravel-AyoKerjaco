import './bootstrap';

function toggleMenu() {
    const navLinks = document.querySelector('.nav ul');
    navLinks.classList.toggle('active');
}

window.toggleMenu = toggleMenu;

<script>
    $(document).ready(function() {
        // Inisialisasi Select2 pada dropdown
        $('.select2').select2({
            placeholder: "Pilih salah satu",
            allowClear: true
        })
    });
</script>
