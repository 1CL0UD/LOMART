<?php
include 'conn.php';
include 'head.php';
?>


<div class="container">
  <div class="card">
    <br>
    <div class="card-body">
      <h5 class="card-title">Tambah Pesanan</h5>

      <form action="send-pesanan.php" method="POST">
        <div class="row w-25">
          <span class="align-middle">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" required></input>
          </span>
        </div>
        <div class="row w-25">
          <span class="align-middle">
            <label for="pesanan">Pesanan</label>
            <input type="text" name="pesanan" class="form-control" placeholder="Pesanan" required></input>
          </span>
        </div>
        <div class="row w-25">
          <span class="align-middle">
            <label for="berat">Berat</label>
            <input type="number" name="berat" class="form-control" placeholder="1-100" required></input>
          </span>
        </div>

        <input type="submit" class="btn btn-primary" value="Simpan"></input>

      </form>
    </div>
  </div>
</div>