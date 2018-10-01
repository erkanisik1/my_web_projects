<form action="<?php echo baseUrl('stats/main') ?>" method="POST">
<?php $ay = date('m');$yil = date('Y'); ?>
    <select name="tarih" id="">
	    <option value="">İstatistik tarihini seçin</option> 
        <?php 
	       for ($i=1; $i < $ay+1 ; $i++) {
                if($i < 10){$i='0'.$i;}
    	        echo '<option value="'.$yil.$i.'">'.$i.'-'.$yil.'</option> ';
           }
        ?>
	</select>
  <input type="submit" name="buton" value="ARA">
</form>
<hr>

<?php 
$tarih = method::post('tarih');  
if (isset($tarih)) {
  $page = '../stats/usage_'.$tarih.'.html';
  if(is_file($page)){
  include $page;  
}else{
  echo '<h1>İSTATİSTİK GÖREBİLEMK İÇİN TARİH SEÇİN</h1>';
}
    
}else{
    $date = date('Ym');
   include '../stats/usage_'.$date.'.html';  
}
?>