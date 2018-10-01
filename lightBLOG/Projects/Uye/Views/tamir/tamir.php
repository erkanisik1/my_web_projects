<?php import::view('header'); ?>


<div class="panel panel-primary">
  <div class="panel-heading">
    Tamirlerim
   

  </div>
  <div class="panel-body">
    <div class="table-responsive">
      <?php if ($liste){ ?>
             <table class="table table-bordered table-condensed">
        <thead class="ortala">
          <tr >
            <th width="73">Geliş Tarihi</th>
            <th width="73">Teslim Tarihi</th>
           
            <th>Cihazın Türü</th>
            <th>Marka Model</th>
            <th>Şikayeti</th>
            <th>Tespitler</th>
            <th>Yapılan Tamir</th>
            <th width="50">Ücreti</th>
            <th width="50">Alınan Ücret</th>
            
          </tr>
        </thead>
        <tbody class="ortala">       
          <?php foreach ($liste as $key): ?>
            <tr >
              <td><?php echo tcevir($key->gelistarihi); ?></td>
              <td><?php echo tcevir($key->teslimtarihi); ?></td>
              <td><?php echo $key->turu; ?></td>
              <td><?php echo $key->marka; ?></td>
              <td><?php echo $key->sikayeti; ?></td>
              <td><?php echo $key->tespit; ?></td>
              <td><?php echo $key->tamir; ?></td>
              <td><?php echo $key->ucret.' TL'; ?></td>
              <td><?php echo $key->alinanucret.' TL'; ?></td>
              
            </tr>
                
            <?php endforeach ?>        
        </tbody>
      </table>
      <?php }else{ ?>
            <h3>Kartal elektronikte tamirde olan bir cihazınız bulunmamaktadır... </h3>
            <h4>Kargo ücretleri müşteriye aittir.<br>Dükkanımızda servis ücreti yoktur. </h4>
      <?php } ?>
     
    </div>
  </div>
</div>

<?php import::view('footer'); ?>