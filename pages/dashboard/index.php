<!--ini pasien
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Dashboard</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <style>
        /* Style umum untuk teks putih */
        .text-white {
            font-weight: 500;
            /* membuat teks sedikit lebih tebal */
        }

        /* Mengubah ukuran dan gaya font untuk judul dan konten yang berbeda */
        h1.text-white {
            font-size: 2.2rem;
            /* ukuran font yang lebih besar */
            font-family: 'Arial', sans-serif;
            /* ganti dengan font pilihan Anda */
        }

        h4.text-white {
            font-size: 1.6rem;
            font-family: 'Arial', sans-serif;
        }

        h5.text-white {
            font-size: 1.3rem;
            font-family: 'Arial', sans-serif;
        }

        /* Gaya khusus untuk teks pada info-box */
        .info-box-text {
            font-size: 1rem;
            /* menyesuaikan ukuran font */
            margin-bottom: 5px;
            /* memberikan sedikit ruang di bawah teks */
        }

        /* Gaya khusus untuk nomor pada info-box */
        .info-box-number {
            font-size: 1.2rem;
            /* menyesuaikan ukuran font */
            font-weight: bold;
            /* membuatnya tebal */
        }
    </style>
</head>

<body>
    <!-- Main content -->
    <section class="content mt-5">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-info">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-check-square fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Tanggal Kunjungan Anda :</span>
                                    <span class="info-box-number text-white">24 Desember 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-secondary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-calendar-check fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Edukasi Kesehatan:</span>
                                    <span class="info-box-number text-white active">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-success">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-check-square fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Pembayaran :</span>
                                    <span class="info-box-number text-white">Online / Offline</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="card card-custom bg-danger">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <i class="fa fa-calendar-check fa-3x text-white"></i>
                                </div>
                                <div class="col-8">
                                    <span class="info-box-text text-white">Edukasi Kesehatan Hari Ini :</span>
                                    <span class="info-box-number text-white">Menjaga pola hidup agar hidup lebih hidup</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /.content -->

    <!-- Link to Bootstrap JS and other necessary scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>