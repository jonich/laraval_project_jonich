<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	

	
    public function __construct()
	{
			
		$lang = Route::current()->getParameter('lang');
		$mytitle=$this->returnlang($lang,'title');
		
		$mybigtext=$this->returnlang($lang,'bigtext');
		
			
		$content=DB::table('menu')->select('id',$mytitle.' AS title','kind','orderid')->where("active","=",1)->orderBy('orderid','asc')->orderBy('kind','asc')->get();
		
		
		$contactdetails=DB::table('content')->select('title','title2','title3',$mybigtext.' AS bigtext')->where("id","=","133")->get();
		
		
		
		
		View::share('mainmenu' ,$content);
		View::share('lang' ,$lang);
		View::share('contactdetails' ,$contactdetails);
		
		$lekseis=array();
		if($lang=="el")
		{
			$lekseis[0]="Επικοινωνία";
			$lekseis[1]="Όνομα";
			$lekseis[2]="Email";
			$lekseis[3]="Θέμα";
			$lekseis[4]="Μήνυμα";
			$lekseis[5]="Αποστολή";
			
			$lekseis[6]="Menu";
			$lekseis[7]="Στοιχεία Επικοινωνίας";
			$lekseis[8]="Γραφεία";
			
			
		}
		if($lang=="en")
		{
			$lekseis[0]="Communication";
			$lekseis[1]="Name";
			$lekseis[2]="Email";
			$lekseis[3]="Subject";
			$lekseis[4]="Message";
			$lekseis[5]="Send";
			
			$lekseis[6]="Menu";
			$lekseis[7]="Contact Details";
			$lekseis[8]="Offices";
			
		}
		
		if($lang=="pu")
		{
			$lekseis[0]="Comunicação";
			$lekseis[1]="Nome";
			$lekseis[2]="Email";
			$lekseis[3]="Assunto";
			$lekseis[4]="Mensagem";
			$lekseis[5]="Mandar";
			
			
			$lekseis[6]="Menu";
			$lekseis[7]="Detalhes do contato";
			$lekseis[8]="Escritórios";
		}
		
		
		
		View::share('lekseis' ,$lekseis);
		
		
		
		
	} 

	public function getIndex($lang)
	{
			
	
		$content=DB::table('menu')->select('id')->where("kind","=",1)->get();
			 $myid=$content[0]->id;
			 
		$mytitle=$this->returnlang($lang,'title');
		$mybigtext=$this->returnlang($lang,'bigtext');	
			
		$content2=DB::table('content')->select('id',$mytitle.' AS title',$mybigtext.' AS bigtext','catid')->where("catid","=",$myid)->get();
		
		$slider=DB::table('slider')->select('id','title')->where("active","=",1)->orderBy('orderid','asc')->get();
		
		$homecontent[0]=$content2;
		$homecontent[1]=$slider;
		
		return View::make('site.pages.home')->with('homecontent',$homecontent);
		
		
		

	}
	
	
	
	
		public function getContent($lang,$title)
		{
		
			$mytitle=$this->returnlang($lang,'title');
			$mybigtext=$this->returnlang($lang,'bigtext');	
			
			$content=DB::table('menu')->select('id')->where($mytitle,"=",$title)->get();
			 $myid=$content[0]->id;
			
			$content2=DB::table('content')->select('id',$mytitle.' AS title',$mybigtext.' AS bigtext','catid')->where("catid","=",$myid)->get();
			
			return View::make('site.pages.content')->with('content', $content2);
		}
		
		
		public function getContact()
		{
			
			
			return View::make('site.pages.contact')->with('sendmessage', "");
		}
		
		public function postContact($lang)
		{
		
		
			
			$name=Input::get('name');
			$email=Input::get('email');
			$subject=Input::get('subject');
			$message=Input::get('message');
			
			
			
			
			$html="Όνομα: ".$name;
			$html.="Email: ".$email;
			$html.="Θέμα: ".$subject;
			$html.="Μήνυμα: ".$message;
			
			//exit;
			
			
			mail("info@hellas-shipping.com.br","Contact Form",$html);
			
			if($lang=="el")
				return View::make('site.pages.contact')->with('sendmessage', "Το μήνυμά σας εστάλλει");
			if($lang=="en")
				return View::make('site.pages.contact')->with('sendmessage', "Your message has been sent");
			if($lang=="pu")
				return View::make('site.pages.contact')->with('sendmessage', "Sua mensagem foi enviada");		
			
			
			//return View::make('site.pages.contact');
			
			
			
		}
		
		
		public function returnlang($lang,$field)
		{
			if($lang=="el")
				$myfield=$field;
			if($lang=="en")
				$myfield=$field."2";
			if($lang=="pu")
				$myfield=$field."3";
				
			return $myfield;	
				
		}
	

	
}
