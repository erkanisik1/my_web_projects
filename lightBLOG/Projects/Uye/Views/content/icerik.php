<?php IMPORT::view('header'); ?>
<div class="row-fluid">
  <?php 
  $btn = ' <a href="'.baseUrl().'uye/icerik/yeni"><button>YENİ İÇERİK</button> </a>';
  echo box('Yazılarım',$btn); if ($icerik) {?>
  <table class="table table-bordered table-condensed">
    <thead>
      <tr>
        <th>İcerik Adı</th>
        <th>Kategorisi</th>
        <th>Durumu</th>
        <th width="80">İşlemler</th>
      </tr>
    </thead>
    <tbody>
     <?php 
     foreach ($icerik as $key ) { ?>
     <tr>
      <td><?php echo $key->baslik ?></td>
      <td><?php echo kategoriName($key->kategori_id); ?></td>
      <td><?php echo $key->onay == '0'? 'ONAY BEKLİYOR':'YAYINLANDI' ?></td>
      <td class="islemler" style="text-align: center;">
        <a href="<?php echo baseUrl(); ?>uye/icerik/duzenle/<?php echo $key->id; ?>"><i class="icon-pencil"></i></a>
        <a href="<?php echo baseUrl(); ?>uye/icerik/sil/<?php echo $key->id; ?>" onclick="return window.confirm('Bu kaydı silmek istediğinize eminmisiniz?');"><i class="icon-remove"></i></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php }else{ ?>
<h2 style="text-align: center;">Herhangi bir yazınız bulunmamaktadır.<br>Hemen sağ yukardaki butona tıklayarak içerik ekleyebilirsiniz.</h2>
<?php } 

echo boxEnd();
Import::view('footer'); 
?>