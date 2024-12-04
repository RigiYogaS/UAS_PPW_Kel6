<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Morev - Login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="<?= base_url('/cssAuth/login.css'); ?>" />
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="kembali">
            <a href="<?= base_url('/'); ?>"><i class="bx bxs-x-square"></i></a>
        </div>
        <div class="logo">
            <img alt="Morev logo" height="50" src="<?= base_url('/assets/logos/logo.svg'); ?>" width="50" />
            <div class="title">Morev</div>
        </div>
        <form action="/guest/doLogin" method="POST">
            <input class="input-field" placeholder="Email" name="email" type="email" required />
            <input class="input-field" placeholder="Password" name="password" type="password" required />
            <br>
            <br>
            <button class="sign-in-button" type="submit">Sign In</button>
            <br>
            <br>
        </form>
        <div class="sign-up">
            Don't have an account?
            <a href="<?= base_url('/auth/regis'); ?>" class="sign-up-click">Sign Up</a>
        </div>
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
    <footer>
        <ul>
            <li>
                <a href=""><i class="bx bxl-facebook-circle footer-icon"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-tiktok footer-icon"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-instagram-alt footer-icon"></i></a>
            </li>
            <li>
                <a href=""><i class="bx bxl-youtube footer-icon"></i></a>
            </li>
        </ul>
        <p>
            <small>Copyright © 2024 Morev. All rights reserved.</small>
        </p>
    </footer>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        $(function() {
            <?php if (session()->has("success")) { ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
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
                title: 'Success !',
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
                title: 'Failed !',
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