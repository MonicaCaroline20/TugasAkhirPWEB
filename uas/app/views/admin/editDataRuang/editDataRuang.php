        <form action="<?php echo BASEURL; ?>/?controller=EditDataRuang" method="post" enctype="multipart/form-data">
<div class="card">
    <div class="card-header">
        <div class="card-title">Data Ruang</div>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Nama Ruang</label>
            <input type="text" name="nama" placeholder="Nama Ruang ..." class="form-control" required="">
        </div>
        
        <div class="form-group">
            <label>Jumlah Ruang</label>
            <input min="1" step="1" value="1" type="number" name="stok" class="form-control" placeholder="Jumlah Ruang ...">
        </div>
        
        <div class="form-group">
            <label>Status</label>
            <input type="text" name="status" placeholder="Status ..." class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Foto Ruang</label>
            <input class="form-control" type="file" id="formFile" name="foto">
        </div>
        
        </div>
        <div class="card-action">
            <button type="submit" name="edit" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
            <a href="<?php echo BASEURL; ?>/?controller=DaftarItem" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
        </div>
        </form>
    </div>
</div>