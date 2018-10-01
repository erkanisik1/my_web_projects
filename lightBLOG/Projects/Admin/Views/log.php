<?php IMPORT::view('header'); ?>

 

	<div class="widget-box">

    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>

      <h5>Loglar</h5>

    </div>

   	<div class="widget-content nopadding">

     	<table class="table table-bordered table-striped">

        <thead>

          <tr>

            <th width="120">Tarih</th>

            <th>Log</th>

            <th>Bölüm</th>

            

          </tr>

        </thead>

        <tbody>               

          <?php foreach ($log1 as $key ): ?>

          	<tr>

          		<td><?php echo Yfunc::tcevir($key->date); ?></td>

          		<td><?php echo $key->log; ?></td>

              <td><?php echo $key->bolum; ?></td>

          	</tr>

          <?php endforeach ?>

        </tbody>

      </table>

 	  </div>

  </div>



<?php Import::view('footer'); ?>