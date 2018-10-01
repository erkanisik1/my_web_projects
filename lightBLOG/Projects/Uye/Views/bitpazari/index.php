<?php Import::view('header'); ?>
<a href="<?php echo baseUrl('uye/bitpazari/yeni') ?>"><button class="btn btn-primary">ÜRÜN EKLE</button></a> <br><br>

<div class="panel panel-primary">
  <div class="panel-heading">İLANLARIM</div>
  <div class="panel-body">
    <table class="table table-bordered">
      <thead>
      <tr>
        <th  width="150">RESİM</th>
        <th width="350">BAŞLIK</th>
        <th width="50">DURUM</th>
        <th>YÖNETİCİ NOTU</th>
        <th width="150">İŞLEM</th>
      </tr>
      </thead>
      <tbody>
 <?php foreach ($list as $key): ?>
        <tr>
          <td> <img src="<?php echo vitrinresim($key->id); ?> " alt="" width="150" height="113"></td>
          <td><?php echo $key->baslik; ?></td>
          <td><?php echo $key->durum == '0'?'PASİF':'AKTİF'; ?></td>
          <td><?php echo $key->uyari; ?></td>
          <td><a href="<?php echo baseUrl('uye/bitpazari/duzenle/'.$key->id) ?>"><button class="btn btn-primary">Düzenle</button></a>
        <a href="<?php echo baseUrl('uye/bitpazari/sil/'.$key->id) ?>" onclick="return window.confirm('Bu kaydı silmek istediğinize eminmisiniz?');"><button class="btn btn-primary">SİL</button></a></td>
        </tr>
         <?php endforeach ?>
      </tbody>
    </table>
 
 
  
  	</div>
  </div>



<?php Import::view('footer'); ?>	