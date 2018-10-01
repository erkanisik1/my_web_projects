<?php 



class Afunc extends Controller{

	public static function resimgoster($icerik) {
		$resimbir = '';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', htmlspecialchars_decode($icerik), $matches);
		if($output){$resimbir = $matches['1']['0'] ;}
      		if(empty($resimbir)){ //Eğer resim eklememişseniz
		     	$resimbir = baseUrl().'uploads/images/eagle.png';
		     }
	     return $resimbir;
	}//resimgoster

		public static function kelimedenbol($metin, $karaktersayisi){ 
			$icerik = htmlspecialchars_decode($metin);
			$icerik = strip_tags($icerik);
			$icerik = str_replace(array("\t","\r","\n"), ' ',$icerik);
			$icerik_bol = explode(' ', $icerik); // metini bosluklara gore bolduk
			$icerik = '';
			for($i = 0; $i < count($icerik_bol); $i++) {
			     if ($icerik_bol[$i] != '') // veri yok mu? Atla, varsa ekle
			     $icerik .= trim($icerik_bol[$i]).' ';
			 }
			 if( preg_match('/(.*?)\s/i', substr($icerik, $karaktersayisi), $dizi) )
			 	return $icerik = substr($icerik, 0, $karaktersayisi+strlen($dizi[0])).'...';
			} //kelimedenbol
	public static function decode($deger){ echo htmlspecialchars_decode($deger);}//decode

/* sonsuz menu fonksiyonu */

		public static function katmenu($parent = '0') {

			$sql = DB::get('kategori')->result();

			foreach($sql AS $key){

				$diziler[$key->id] = [

				'kat_seo'     => $key->kat_seo,

				'kategori'  => $key->kategori,

				'ust_kategori_id'  => $key->ust_kategori_id,

				'id'      => $key->id

				];

			}



			$has_childs = false;



			foreach($diziler as $key => $value)  {



				if ($value['ust_kategori_id'] == $parent) { 

					if ($has_childs === false){

						$has_childs = true;

						echo '<ul>';

					}



					echo '<li><a href="'.baseUrl().'kategori/'.$value['id'].'-'.$value['kat_seo'].'.html">'.$value['kategori'].'</a>';

				 Afunc::katmenu($key);

					echo '</li>';

				}

			}

			if ($has_childs === true) echo "</ul>";

		}//katmenu

			public static function breadcrumbs($text = 'Buradasınız: ', $sep = ' &raquo; ', $home = 'Anasayfa') {
			$bc     =   '<div xmlns:v="http://rdf.data-vocabulary.org/#" id="crums">'.$text;
			$site   =   'http://'.$_SERVER['HTTP_HOST'];
			$crumbs =   array_filter( explode("/",$_SERVER["REQUEST_URI"]) );
			$bc    .=   '<span typeof="v:Breadcrumb"><a href="'.$site.'" rel="v:url" property="v:title">'.$home.'</a>'.$sep.'</span>'; 
			$nm     =   count($crumbs);
			$i      =   1;
			foreach($crumbs as $crumb){
				$link    =  ucfirst( str_replace( array(".html","-","_"), array(""," "," ") ,$crumb) );
				$sep     =  $i==$nm?'':$sep;
				$site   .=  '/'.$crumb;
				$bc     .=  '<span typeof="v:Breadcrumb"><a href="'.$site.'" rel="v:url" property="v:title">'.$link.'</a>'.$sep.'</span>';
				$i++;
			}
			$bc .=  '</div>';
			return $bc;
		}//breadcrumbs

			public static function catname($d = '',$seo = ''){
				if($seo){
					return DB::select('kat_seo')->where('id',$d)->get('kategori')->value();
				}else{
					return DB::select('kategori')->where('id',$d)->get('kategori')->value();
				}
			}

		public static function tcevir($tarih) {
				$bosluk = explode(' ', $tarih);
				$tr = explode("-",$bosluk['0']);
				$tarih1 = $tr['2']."-".$tr['1']."-".$tr['0'];
				return $tarih1;
			} //tcevir
	public static function jalert($p){echo '<script>alert("'.$p.'")</script>';}//jalert

		public static function git($link = ''){
				if($link){
					echo '<meta http-equiv="refresh" content="0; url='.baseUrl().'/'.$link.'">';
				}else{
					echo '<meta http-equiv="refresh" content="0; url='.baseUrl().'">';
				}
			}//git

			
		public static function sifreuret($uzunluk){
			$pwd = '';
			if(!is_numeric($uzunluk) || $uzunluk <= 0){$uzunluk = 8; }
			if($uzunluk  > 32){$uzunluk = 32;}
			$karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			mt_srand(microtime() * 1000000);
			for($i = 0; $i < $uzunluk; $i++){
				$key = mt_rand(0,strlen($karakter)-1);
				$pwd = $pwd . $karakter{$key};
			}
			for($i = 0; $i < $uzunluk; $i++){
				$key1 = mt_rand(0,strlen($pwd)-1);
				$key2 = mt_rand(0,strlen($pwd)-1);
				$tmp = $pwd{$key1};
				$pwd{$key1} = $pwd{$key2};
				$pwd{$key2} = $tmp;
			}
			return $pwd;
		}// şifreüret

}