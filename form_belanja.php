<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h3 style='text-align: center; margin: 50px;'>Belanja Online</h3>
<div class="d-flex justify-content-center" style="margin: 100px;">
    <div class="card" style="width: 50rem; padding:50px; background-color: rgb(3, 227, 252)">
        <form method="POST" action="form_belanja.php">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Customer">
                </div>
            </div>
            <div class="form-group row">
                <label for="produk" class="col-4 col-form-label">Pilih Produk</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="tv" value="TV">
                    <label class="form-check-label" for="tv">TV</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="kulkas" value="Kulkas">
                    <label class="form-check-label" for="kulkas">Kulkas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="mesin_cuci" value="Mesin Cuci">
                    <label class="form-check-label" for="mesin_cuci">Mesin Cuci</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                    <input id="jumlah" name="jumlah" type="number" class="form-control" placeholder="Jumlah">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>

        <?php
            $nama_cust = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            if ($produk == 'TV'){
                $harga = 4200000;
            }
            elseif ($produk == 'Kulkas'){
                $harga = 3100000;
            }
            else{
                $harga = 3800000;
            }

            $total = $harga * $jumlah;

            echo 'Nama Customer: '.$nama_cust;
            echo '<br/>Produk Pilihan: '.$produk;
            echo '<br/>Jumlah Beli: '.$jumlah;
            echo '<br/>Total Belanja: '.number_format($total,2,',','.');
        ?>
    </div>
    <table class="table" border='1' style='width: 300px;'>
        <thead  class="table-primary">
            <tr><th>Daftar Harga</th></tr>
        </thead>
        <tbody>
            <tr><td>TV: 4.200.000</td></tr>
            <tr><td>Kulkas: 3.100.000</td></tr>
            <tr><td>Mesin Cuci: 3.800.000</td></tr>
        </tbody>
        <tfoot class="table-primary">
            <tr><td>Harga Dapat Berubah Setiap Saat</td></tr>
        </tfoot>
    </table>
</div>