<?php 

class YFunc {

	public static function  KategoriListesi($id = 0,$secim = 0,$tire = 0,$select = ''){
   $sorgu = DB::where('ust_kategori_id',$id,'and')->where('durum','1')->get('kategori')->result();
   $se = '';
   foreach ($sorgu as $key) {
    if ($key->ust_kategori_id == 0) { 
      $tire = 0;
      $style = 'color:#000;font-weight:bolder;font-size:13px;';
      $se = 'disabled';
    }
    if ($secim != $key->ust_kategori_id){
      $secim = $key->ust_kategori_id;
      $style = 'color:#000';
      $tire++;
    }

    if($key->id == $select){$sel = 'selected';}else{$sel='';}
    echo '<option value="'.$key->id.'" style="'.$style.'"'.$se.$sel.' >'.str_repeat('-&nbsp;',$tire).$key->kategori."</option>";
    yfunc::KategoriListesi($key->id,$secim,$tire,$select);       
  }
}



public static function  KategoriTablosu($id = 0,$secim = 0,$tire = 0){
  $sorgu = DB::where('ust_kategori_id',$id)->get('kategori')->result();
  foreach ($sorgu as $key) {
    if ($key->ust_kategori_id == 0) {
      $tire = 0;
      $style = 'color:#000;font-weight:bolder;font-size:13px;';
    }

    if ($secim != $key->ust_kategori_id){
      $secim = $key->ust_kategori_id;
      $style = 'color:#000';
      $tire++;
    }

    $duzenle = baseUrl().'yonetim/kategori/duzenle/'.$key->id;
    $sil = baseUrl().'yonetim/kategori/sil/'.$key->id;
    echo '<tr>
    <td style="'.$style.'">'.str_repeat('-&nbsp;',$tire).$key->kategori.'</td>
    <td class="islemler" style="text-align: center;"> 
     <a href="'.$duzenle.'"><i class="icon-pencil"></i></a>
     <a href="'.$sil.'"><i class="icon-remove"></i></a>
   </td>
 </tr>';
 yFunc::KategoriTablosu($key->id,$secim,$tire);
}
}


public static function ykat($id = ''){

  if ($id) {

    return DB::where('ust_kategori_id',$id)->get('kategori')->result();

  }else{

    return DB::orderBy('kategori','asc')->get('kategori')->result();

  }

  

} 



public static function  yonetimKategori($id = 0,$secim = 0,$tire = 0){



  $sorgu = DB::where('ust_kategori_id',$id)->get('kategori')->result();



  foreach ($sorgu as $key) {

    if ($key->ust_kategori_id == 0) {

      $tire = 0;

      $style = 'color:#000;font-weight:bolder;font-size:13px;';

    }



    if ($secim != $key->ust_kategori_id){

      $secim = $key->ust_kategori_id;

      $style = 'color:#000';

      $tire++;

    }



    echo '<option value="'.$key->id.'" style="'.$style.'">'.str_repeat('-&nbsp;',$tire).$key->kategori."</option>";

    yFunc::yonetimKategori($key->id,$secim,$tire);

  }

}



public static function seo($s) {

  $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');

  $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','-');

  $s = str_replace($tr,$eng,$s);

  $s = strtolower($s);

  $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);

  $s = preg_replace('/\s+/', '-', $s);

  $s = preg_replace('|-+|', '-', $s);

  $s = preg_replace('/#/', '', $s);

  $s = str_replace('.', '', $s);

  $s = trim($s, '-');

  return $s;

}



public static function menuname(){

  return DB::orderBy('menu_name','asc')->get('menuname')->result();

}



public static function yazilar(){

  return DB::orderBy('baslik','asc')->get('icerik')->result();

}



public static function kategoriler(){

  return DB::orderBy('kategori','asc')->get('kategori')->result();

}



public static function tcevir($tarih) {

  $bosluk = explode(' ', $tarih);

  $tr = explode("-",$bosluk['0']);

  $tarih1 = $tr['2']."-".$tr['1']."-".$tr['0'].' '.isset($bosluk['1']);

  return $tarih1;

}
}
