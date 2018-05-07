<?php
      echo form_open('home/tambah', array('enctype'=>'multipart/form-data')); 
       ?>
      <table>
        <?php echo validation_errors(); ?>
        <tr>
          <td>Nama Barang</td>
          <td>:</td>
          <td><input type="text" name="input_nama_barang" value="<?php echo set_value('input_nama_barang'); ?>"></td>
        </tr>
        <tr>
          <td>Jumlah Stok</td>
          <td>:</td>
          <td><input type="text" name="input_jumlah_stok" value="<?php echo set_value('input_jumlah_stok'); ?>"></td>
        </tr>
        <tr>
          <td>Harga Satuan </td>
          <td>:</td>
          <td><input type="text" name="input_harga_satuan" value="<?php echo set_value('input_harga_satuan'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar"></td>
        </tr>
        <tr>
          <td>Keterangan </td>
          <td>:</td>
          <td><input type="text" name="input_keterangan" value="<?php echo set_value('input_keterangan'); ?>"></td>
        </tr>
        <tr>
          <td>Tanggal </td>
          <td>:</td>
          <td><input type="text" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        


        <tr>
          <label>Kategori : </label>
          <select name="id_kategori" class="form-control" required> 
            <option value="">Pilih Category</option>
            <?php foreach ($Category as $Category): ?>
              <option value="<?php echo $Category->id_kategori; ?>"><?php echo $Category->nama_kategori; ?></option>
              <?php endforeach; ?>
            </select>
            

        <tr>
          <td colspan="3"><input type="submit" name="simpan" value="<?php echo set_value('input_gambar'); ?>simpan"></td>
        </tr>

      </table>
    </div>