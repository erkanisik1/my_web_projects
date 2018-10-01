<?php	
namespace ZN\Services;

interface EmailInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------

	/******************************************************************************************
	* SETTINGS                                                                                *
	*******************************************************************************************
	| Genel Kullanım: E-posta ayarlarını yapılandırmak için kullanılır.						  |
	|															                              |
	| Parametreler: Tek parametresi vardır.                                                   |
	| 1. array var @config => Yapılandırılacak ayarlar.		  								  |
	|          																				  |
	| Örnek Kullanım: settings(array('wordWrap' => true));       							  |
	|          																				  |
	******************************************************************************************/
	public function settings($settings);
	
	/******************************************************************************************
	* SMPT HOST			                                                                      *
	*******************************************************************************************
	| Genel Kullanım: SMPT Host ayarını yapmak için kullanılır.					 	  	      |
		
	  @param string $host
	  retun object
	|          																				  |
	******************************************************************************************/
	public function smtpHost($host);
	
	/******************************************************************************************
	* CONTENT TYPE		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: E-posta içeriğinin türünü ayarlamak için kullanılır.		 	  	      |
		
	  @param string $type plain
	  retun object
	|          																				  |
	******************************************************************************************/
	public function contentType($type);
	
	/******************************************************************************************
	* CHARSET   		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: Metnin karakter kodlama türünü ayarlamak için kullanılır. 	  	      |
		
	  @param string $charset UTF-8
	  retun object
	|          																				  |
	******************************************************************************************/
	public function charset($charset);
	
	/******************************************************************************************
	* SMPT USER			                                                                      *
	*******************************************************************************************
	| Genel Kullanım: SMPT kullanıcı ayarını yapmak için kullanılır.					 	  |
	|															                              |
	| Parametreler: Tek parametresi vardır.                                                   |
	| 1. string var @user => SMTP kullanıcı adı.	     		  					  		  |
	|          																				  |
	| Örnek Kullanım: smtpUser('bilgi@zntr.net');			 							      |
	|          																				  |
	******************************************************************************************/
	public function smtpUser($user);
	
	/******************************************************************************************
	* DSN       		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: DSN durumunu ayarlamak için kullanılır.								  |
	
	  @param bool $dsn true
	  @return object
	|          																				  |
	******************************************************************************************/
	public function smtpDsn($dsn);
	
	/******************************************************************************************
	* SMPT PASSWORD		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: SMPT kullanıcı şifre ayarını yapmak için kullanılır.					  |
	|															                              |
	| Parametreler: Tek parametresi vardır.                                                   |
	| 1. string var @pass => SMTP kullanıcı şifresi.	     		  					  	  |
	|          																				  |
	| Örnek Kullanım: smtpPassword('zntr1234');			 							  		  |
	|          																				  |
	******************************************************************************************/
	public function smtpPassword($pass);
	
	/******************************************************************************************
	* SMPT PORT  		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: SMPT port ayarını yapmak için kullanılır.								  |
	|															                              |
	| Parametreler: Tek parametresi vardır.                                                   |
	| 1. string var @port => SMTP port numarası.		     		  					  	  |
	|          																				  |
	| Örnek Kullanım: smtpPort(587);					 							  		  |
	|          																				  |
	******************************************************************************************/
	public function smtpPort($port);
	
	/******************************************************************************************
	* SMPT TIMEOUT		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: SMPT bağlantı zaman aşımı ayarını yapmak için kullanılır.				  |
	|															                              |
	| Parametreler: Tek parametresi vardır.                                                   |
	| 1. string var @timeout => SMTP zaman aşımı süresi.     		  					  	  |
	|          																				  |
	| Örnek Kullanım: smtpTimeout(10);	// 10 Saniye	 							  		  |
	|          																				  |
	******************************************************************************************/
	public function smtpTimeout($timeout);
	
	/******************************************************************************************
	* SMPT KEEP ALIVE	                                                                      *
	*******************************************************************************************
	| Genel Kullanım: SMPT bağlantısını açık tutulup tutulmayacağını ayarlamak için kullanılır|
	|															                              |
	| Parametreler: Tek parametresi vardır.                                                   |
	| 1. string var @keepAlive => Bağlantı durumu.		     		  					  	  |
	|          																				  |
	| Örnek Kullanım: smtpKeepAlive(true);				 							  		  |
	|          																				  |
	******************************************************************************************/
	public function smtpKeepAlive($keepAlive);
	
	/******************************************************************************************
	* SMPT ENCODE 		                                                                      *
	*******************************************************************************************
	| Genel Kullanım: SMPT tls veya ssl güvenlik ayarlarından birini kullanmak içindir.		  |
	|															                              |
	| Parametreler: Tek parametresi vardır.                                                   |
	| 1. string var @encode => Şifreleme türü.		     			  					  	  |
	|          																				  |
	| Örnek Kullanım: smtpKeepAlive('tls'); // tls veya ssl							  		  |
	|          																				  |
	******************************************************************************************/
	public function smtpEncode($encode);
	
	/******************************************************************************************
	* PRIORITY                                                                                *
	*******************************************************************************************
	| Genel Kullanım: Gönderim öncelik derecesini ayarlamak için kullanılır.     			  |
	
	  @param  numeric $count 3
	  @return object
	|          																				  |
	******************************************************************************************/
	public function priority($count);
	
	/******************************************************************************************
	* TO                                                                                      *
	*******************************************************************************************
	| Genel Kullanım: Alıcı.																  |
	
	  @param  string $to
	  @param  string $name
	  @return object
	|          																				  |
	******************************************************************************************/
	public function to($to, $name);
	
	/******************************************************************************************
	* RECEIVER / TO                                                                           *
	*******************************************************************************************
	| Genel Kullanım: Alıcı.																  |
	
	  @param  string $to
	  @param  string $name
	  @return object
	|          																				  |
	******************************************************************************************/
	public function receiver($to, $name);
	
	/******************************************************************************************
	* REPLY TO                                                                                *
	*******************************************************************************************
	| Genel Kullanım: Alıcı.																  |
	
	  @param  $to
	  @return object
	|          																				  |
	******************************************************************************************/
	public function replyTo($replyTo, $name);
	
	
	/******************************************************************************************
	* CC                                                                                      *
	*******************************************************************************************
	| Genel Kullanım: CC Alıcıları.															  |
	
	  @param  $cc
	  @return object
	|          																				  |
	******************************************************************************************/
	public function cc($cc, $name);
	
	/******************************************************************************************
	* BCC                                                                                      *
	*******************************************************************************************
	| Genel Kullanım: BCC Alıcıları.															  |
	
	  @param  $bcc
	  @return object
	|          																				  |
	******************************************************************************************/
	public function bcc($bcc, $name);
	
	/******************************************************************************************
	* FROM                                                                                    *
	*******************************************************************************************
	| Genel Kullanım: Gönderici.															  |
	
	  @param  $from
	  @param  $name
	  @return void
	|          																				  |
	******************************************************************************************/
	public function from($from, $name, $returnPath);
	
	/******************************************************************************************
	* SENDER / FROM                                                                           *
	*******************************************************************************************
	| Genel Kullanım: Gönderici.															  |
	
	  @param  $from
	  @param  $name
	  @return void
	|          																				  |
	******************************************************************************************/
	public function sender($from, $name, $returnPath);
	
	/******************************************************************************************
	* SUBJECT                                                                                 *
	*******************************************************************************************
	| Genel Kullanım: Konu.																	  |
	
	  @param  $subject
	  @return void
	|          																				  |
	******************************************************************************************/
	public function subject($subject);
	
	/******************************************************************************************
	* MESSAGE                                                                                 *
	*******************************************************************************************
	| Genel Kullanım: Mesaj																	  |
	
	  @param  $message
	  @return void
	|          																				  |
	******************************************************************************************/
	public function message($message);
	
	/******************************************************************************************
	* CONTENT / MESSAGE                                                                       *
	*******************************************************************************************
	| Genel Kullanım: Mesaj																	  |
	
	  @param  $message
	  @return void
	|          																				  |
	******************************************************************************************/
	public function content($message);

	/******************************************************************************************
	* ADD HEADER			                                                                  *
	*******************************************************************************************
	| Genel Kullanım: Başlık eklemek için kullanılır.										  |
	
	  @param  string $header
	  @param  string $value
	  @return void
	|          																				  |
	******************************************************************************************/
	public function addHeader($header, $value);
	
	/******************************************************************************************
	* CONTENT TYPE			                                                    			  *
	*******************************************************************************************
	| Genel Kullanım: Mesajın içerğini kodlamak için kullanılılr.							  |
	
	  @param  string $type 8bit
	  @return object
	|          																				  |
	******************************************************************************************/
	public function encodingType($type);
	
	/******************************************************************************************
	* MULTIPART   			                                                    			  *
	*******************************************************************************************
	| Genel Kullanım: Mesajın içeriğinin sınır.												  |
	
	  @param  string mixed
	  @return object
	|          																				  |
	******************************************************************************************/
	public function multiPart($multiPart);
	
	/******************************************************************************************
	* ATTACHMENT                                                                              *
	*******************************************************************************************
	| Genel Kullanım: E-post gönderiminde gönderiye eklenecek ekler.					 	  |
	  
	  @param string $file
	  @param string $disposition
	  @param string $newName
	  @param string $mime application/octet-stream
	  @return array
	|          																				  |
	******************************************************************************************/
	public function attachment($file, $disposition, $newName, $mime);
	
	/******************************************************************************************
	* ATTACHMENT CONTENT ID                                                                   *
	*******************************************************************************************
	| Genel Kullanım: Ekin içerik id bilgisini verir.					 	  				  |
	 
	  @param  string $filename
	  @return array
	|          																				  |
	******************************************************************************************/
	public function attachmentContentId($filename);
	
	/******************************************************************************************
	* SEND		    		                                                                  *
	*******************************************************************************************
	| Genel Kullanım: E-posta gönderimini sağlayan nihai yöntemdir.							  |
	
	  @param  string $subject
	  @param  string $message
	  @return bool
	|          																				  |
	******************************************************************************************/
	public function send($subject, $message);
}