<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morev Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('/cssAuth/regis.css'); ?>" />
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="kembali">
            <a href="javascript:history.back()">
                <i class="bx bxs-x-square"></i>
            </a>
        </div>
        <div class="logo">
            <img alt="Morev logo" height="50" src="<?= base_url('/assets/logos/logo.svg'); ?>" width="50" />
            <div class="title">Welcome to Morev</div>
        </div>
        <form id="registerForm" action="/guest/registersimpan" method="POST">
            <input id="email" class="input-field" name="email" placeholder="Email" type="email" required />
            <input id="username" class="input-field" name="username" placeholder="Username" type="text" required />
            <input id="password" class="input-field" name="password" placeholder="Create a password" type="password" required />
            <input id="konfirmasipassword" class="input-field" name="konfirmasipassword" placeholder="Confirm your password" type="password" required />
            <span id="error-message" style="color: red; font-size: 12px; display: none;">Passwords do not match!</span>
            <br>
            <br>
            <button id="continue-button" class="continue-button" type="submit" disabled>Continue</button>
            <br>
            <br>
        </form>
        <!-- <div class="or">or</div>
        <button class="continue">
            <i class="bx bxl-google continue-icon"></i>
            Continue with Google
        </button>
        <button class="continue">
            <i class="bx bxl-microsoft continue-icon"></i>
            Continue with Microsoft Account
        </button>
        <button class="continue">
            <i class="bx bxl-apple continue-icon"></i>
            Continue with Apple
        </button> -->
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modal-message">This is a modal message!</p>
        </div>
    </div>

    <footer style="margin-top: 75px;">
        <ul>
            <li>
                <a href=""><i class="bx bxl-facebook-circle"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-tiktok"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-instagram-alt"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-youtube"></i></a>
            </li>
        </ul>
        <p><small>Copyright © 2024 Morev. All rights reserved.</small></p>
    </footer>
    <script src="script.js"></script>
    <script>
        // Get form elements
        const passwordField = document.getElementById('password');
        const confirmPasswordField = document.getElementById('konfirmasipassword');
        const continueButton = document.getElementById('continue-button');
        const errorMessage = document.getElementById('error-message');

        // Function to check passwords
        function checkPasswords() {
            if (passwordField.value === confirmPasswordField.value && passwordField.value !== '') {
                errorMessage.style.display = 'none'; // Hide error message
                continueButton.disabled = false; // Enable the button
            } else {
                errorMessage.style.display = 'inline'; // Show error message
                continueButton.disabled = true; // Disable the button
            }
        }

        // Add event listeners to password fields
        passwordField.addEventListener('input', checkPasswords);
        confirmPasswordField.addEventListener('input', checkPasswords);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        $(function() {
            <?php if (session()->has("success")) { ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '<?= session("success") ?>'
                })
            <?php } ?>
        });
        $(function() {
            <?php if (session()->has("error")) { ?>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?= session("error") ?>'
                })
            <?php } ?>
        });
        const flashData = $('.flash-data').data('flashdata');
        // console.log(flashData);
        if (flashData) {
            Swal.fire({
                title: 'Berhasil !',
                text: '' + flashData,
                icon: 'success',
                showConfirmButton: false,
                timer: 3500
            });
        }
    </script>
    <script>
        const flashDataError = $('.flash-data-error').data('flashdata');
        // console.log(flashData);
        if (flashDataError) {
            Swal.fire({
                title: 'Gagal !',
                text: '' + flashDataError,
                icon: 'error',
                showConfirmButton: false,
                timer: 3500
            });
        }
    </script>
    <script>
        $('.bdel').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success m-1',
                    cancelButton: 'btn btn-danger m-1'
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'Yakin data ini akan dihapus?',
                text: "Data tidak akan bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        '',
                        'error'
                    )
                }
            });
        });
    </script>
    <script>
        $('.bconfir').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: 'INFO',
                text: "Dengan mengklik tombol 'Ya', notifikasi tagihan SPP akan masuk ke ruang orang tua/wali.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya !',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Dibatalkan',
                        '',
                        'error'
                    )
                }
            });
        });
    </script>
</body>

</html>