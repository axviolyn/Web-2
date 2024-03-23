<?php
require_once 'header.php';
require_once 'sidebar.php';



?>
 <style>
        body {
            font-family: "Times, Times New Roman, serif";
            margin: 20px;
        }

        .container {
            border: 1px solid #ddd;
            padding: 30px;
            width: 600px;
            margin: 20px;
            background-color: #bdb78b;
        }

        h1 {
            text-align: center;
        }

        hr {
            border-top: 1px solid #ddd;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .col-form-label {
            text-align: right;
        }

        .custom-control {
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #6495ED;
            border-color: #6495ED;
        }

        .harga-list {
            list-style-type: none;
            padding: 0;
        }

        .harga-list li {
            margin-bottom: 5px;
        }

        .harga-sidebar {
            position: fixed;
            top: 50px;
            right: 50px;
            width: 300px;
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Tugas Praktikum</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Praktikum 02</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="praktikum02.php">
                    <h1> BELANJA ONLINE </h1>
                    <hr>
                    <div class="form-group row">
                        <label for="namaCustomer" class="col-4 col-form-label">Customer</label> 
                        <div class="col-8">
                            <input id="namaCustomer" name="namaCustomer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label">Pilih Produk</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih_produk" id="pilih_produk" type="radio" class="custom-control-input" value="tv"> 
                                <label for="pilih_produk" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="kulkas"> 
                                <label for="pilih_produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
                                <label for="pilih_produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-form-label" for="jumlah">Jumlah</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaCustomer= $_POST['namaCustomer'];
        $pilih_produk = $_POST['pilih_produk'];
        $jumlah = $_POST['jumlah'];
    }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php if(isset($namaCustomer) && isset($pilih_produk) && isset($jumlah)) :?>
                    <h3 class="card-title"> DATA PEMBELIAN </h3>
                    <br>
                    <p> Nama Customer : <?= $namaCustomer ?> </p>
                    <p> Produk Pilihan : <?= $pilih_produk ?> </p>
                    <p> Jumlah Beli : <?= $jumlah ?> </p>

                    <?php
                    if (isset($pilih_produk)) {
                        if ($pilih_produk == "tv") {
                            echo '<p class="card-text"> Jumlah Harga : Rp. ' . number_format(4200000 * $jumlah, 0) . '</p>';
                        } elseif ($pilih_produk == "kulkas") {
                            echo '<p class="card-text"> Jumlah Harga : Rp. ' . number_format(3100000 * $jumlah, 0) . '</p>';
                        } elseif ($pilih_produk == "mesin cuci") {
                            echo '<p class="card-text"> Jumlah Harga : Rp. ' . number_format(3800000 * $jumlah, 0) . '</p>';
                        } else {
                            echo '<p class="card-text"> Data Tidak Ada</p>';
                        }
                    }
                    ?>
                    <?php endif; ?>
            </div>


            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>