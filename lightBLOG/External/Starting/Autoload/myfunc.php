<?php 
function category($id){return DB::where('parrent_id',$id)->get('category')->result();}
function contentlist(){return DB::where('homepage','1','and')->where('status','1')->get('content')->result();}
function author($id){return DB::where('id',$id)->get('user')->row();}
 function jalert($p){echo '<script>alert("'.$p.'")</script>';}

 function git($link = ''){

				if($link){

				  echo '<meta http-equiv="refresh" content="0; url='.baseUrl($link).'">';

				}else{

					echo '<meta http-equiv="refresh" content="0; url='.baseUrl().'">';

				}

       }




function duyuru(){
	$dyr = DB::orderBy('id','desc')->where('durum','1')->get('duyuru')->result();
	
	foreach ($dyr as $key) {
		echo  '<div class="duyuru">'.$key->duyuru.'</div>';
	}
	
}

function selected($id1, $id2){if ($id1 == $id2){echo 'selected';}}

function checked($id1, $id2){if ($id1 == $id2){echo 'checked';}}

function katmenu($parent = '0') {
  $sql = DB::get('kategori')->result();
  foreach($sql AS $key){
    $diziler[$key->id] = [
    'kat_seo'     => $key->kat_seo,
    'kategori'  => $key->kategori,
    'ust_kategori_id'  => $key->ust_kategori_id,
    'id'      => $key->id];
  }
  $has_childs = false;
  foreach($diziler as $key => $value)  {
    if ($value['ust_kategori_id'] == $parent) { 
      if ($has_childs === false){
        $has_childs = true;
        echo '<ul>';
      }
      echo '<li><a href="'.baseUrl().'kategori/'.$value['id'].'-'.$value['kat_seo'].'.html">'.$value['kategori'].'</a>';
      katmenu($key);
      echo '</li>';
    }
  }
  if ($has_childs === true) echo "</ul>";

}//katmenu

function logSave($k,$bolum){
	DB::insert('log',[
				'log' => $k,
				'bolum' => $bolum,
			]);
} 
/* içerik kategorilerini verir */
function contentKat($id = '0'){
  return DB::where('ust_kategori_id',$id,'AND')->where('durum','1')->get('kategori')->result();
}

function  KategoriListesi($id = 0,$secim = 0,$tire = 0,$select = ''){
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
    KategoriListesi($key->id,$secim,$tire,$select);       
  }
}

function  yonetimKategori($id = 0,$secim = 0,$tire = 0){
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
    yonetimKategori($key->id,$secim,$tire);
  }

}

function seo($s) {
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

function tcevir($tarih) {

  $bosluk = explode(' ', $tarih);

  $tr = explode("-",$bosluk['0']);

  $tarih1 = $tr['2']."-".$tr['1']."-".$tr['0'];

  return $tarih1;

}

function box($title,$btn = ''){
	return '<div class="panel panel-primary">
  <div class="panel-heading">'.$title.' <div class="pull-right">'.$btn.'</div></div>
  <div class="panel-body">';
}

function boxEnd(){
	return '</div></div>';
}

function table($attr = [],$th = [],$td = []){
$par = '';$thr='';
	foreach ($attr as $key => $value) {
		$par .= $key.'="'.$value.'" ';
	}

	foreach ($th as $key ) {
		$thr .= '<th>'.$key.'</th>';
	}
	
	return '<table '.$par.'>

              <thead>

                <tr>'.$thr.'
              </thead>

                </tr>


	</table>';
}

function user($id){
  return DB::where('kullanici_id',$id)->get('kullanici')->row();
}


function imageUnlink($link){
  unlink($_SERVER['DOCUMENT_ROOT'].'/'.$link);
}