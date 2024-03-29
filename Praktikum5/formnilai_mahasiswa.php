<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 - Form Nilai Mahasiswa</title>
</head>
    <body>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="container mt-3">
        <h1>Form Nilai Siswa</h1>
        <form action="nilai_mahasiswa.php" method="post">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="pilih mk" class="col-4 col-form-label">Pilih MK</label> 
                <div class="col-8">
                <select id="pilih mk" name="pilih mk" class="custom-select" required="required">
                    <option value="pemrograman web">Pemrograman Web</option>
                    <option value="statistik dan probabilitas">Statistik dan Probabilitas</option>
                    <option value="basis data">Basis Data</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </body>
</html>