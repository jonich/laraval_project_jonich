<?php

use Illuminate\Http\Request;

class AdminAdminController extends BaseController {

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
  
	
	
	
	//echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
	//echo Auth::user()->username;
	
	
	
	
	if(!Auth::check())
		 Redirect::to('/admin');
  
	$menu=Menu::orderBy('orderid','asc')->orderBy('kind','asc')->get();  
    View::share('leftmenu', $menu);
	
	
  } 

	public function compose($view)
    {
        $view->with('count', Menu::count());
    }
	

	public function getIndex()
	{
	
	//echo Request::root();
	//{{ asset('css/styles.css') }}
	//exit;
	   
	  $a="a";
	
	  $b="b";
	   
	   $data=array("a"=> $a, "b"=> $b);
	   
	 
	   
		return $this->getMenu();
	}
	
	
	
	
		//-------------------------------- SLIDER -----------------------------------------------------
	
	public function getSlider()
	{
	
	    $menu=Slider::orderBy('orderid','asc')->get();
		return View::make('admin.slider.slider')->with('menu', $menu);

	}
	
	public function getSliderjson()
	{
	
	    $menu=Slider::orderBy('orderid','asc')->get();
		$res2=array("ResultData" => $menu);
		echo json_encode($res2);
		//return View::make('admin.slider.slider')->with('menu', $menu);

	}
	
	
	
	public function postSlider()
	{
		
			
		$menu=new Slider;
		$menu->orderid=Input::get('orderid');
		$menu->active=Input::get('active');
		
		$menu->save();
		
		if(Input::file('myphoto'))	
			Input::file('myphoto')->move("slider", $menu->id.".jpg");

		
		$menu=Slider::orderBy('orderid','asc')->get();	
		return View::make('admin.slider.slider')->with('menu', $menu);
	}
	
	public function getSlidercreate()
	{
	
		return View::make('admin.slider.addslider');
	}
	
	public function getSlideredit($elem)
	{
		$menu=Slider::find($elem);
		return View::make('admin.slider.editslider')->with('menu', $menu);
	}
	
	
	public function postSlideredit()
	{
		
		 $editid=Input::get('editid');
		
		
		DB::table('slider')
            ->where('id', $editid)
            ->update(array(
			'orderid' => Input::get('orderid'),
			'active' => Input::get('active')
			));
		
		if(Input::file('myphoto'))	
			Input::file('myphoto')->move("slider", $editid.".jpg");
		
		return Redirect::to('administrator/slider');
		
	}
	
	
	public function postSliderdelete()
	{
		
		$delid=Input::get('delid');
		DB::table('slider')->where("id","=",$delid)->delete();
		
		$menu=Slider::orderBy('orderid','asc')->get();
		return View::make('admin.slider.slider')->with('menu', $menu);
		
	}
	
	
	
	
	//--------------------------------END SLIDER-----------------------------------------------------
	
	
	
	
	
	
	//--------------------------------MENU-----------------------------------------------------
	
	public function getMenu()
	{
	
	    $menu=Menu::orderBy('orderid','asc')->orderBy('kind','asc')->get();
		return View::make('admin.menu.menu')->with('menu', $menu);

	}
	
	public function postMenu()
	{
		

		$menu=new Menu;
		$menu->title=Input::get('title');
		$menu->title2=Input::get('title2');
		$menu->title3=Input::get('title3');
		$menu->orderid=Input::get('orderid');
		$menu->kind=Input::get('kind');
		$menu->active=Input::get('active');
		$menu->caption=Input::get('title');
		$menu->save();
		$menu=Menu::orderBy('orderid','asc')->get();
		
		if(Input::file('myphoto'))	
			Input::file('myphoto')->move("menu", $menu->id.".jpg");
			
		return View::make('admin.menu.menu')->with('menu', $menu);
	}
	
	public function getMenucreate()
	{
	
		return View::make('admin.menu.addmenu');
	}
	
	public function getMenuedit($elem)
	{
		$menu=Menu::find($elem);
		return View::make('admin.menu.editmenu')->with('menu', $menu);
	}
	
	
	public function postMenuedit()
	{
		
		 $editid=Input::get('editid');
		
		
		DB::table('menu')
            ->where('id', $editid)
            ->update(array(
			'title' => Input::get('title'),
			'title2' => Input::get('title2'),
			'title3' => Input::get('title3'),
			'orderid' => Input::get('orderid'),
			'kind' => Input::get('kind'),
			'active' => Input::get('active'),
			'caption' => Input::get('title')
			));
			
		if(Input::file('myphoto'))	
			Input::file('myphoto')->move("menu", $editid.".jpg");	
		
		
		return Redirect::to('administrator/menu');
		
	}
	
	
	public function postMenudelete()
	{
		
		$delid=Input::get('delid');
		DB::table('menu')->where("id","=",$delid)->delete();
		
		$menu=Menu::orderBy('orderid','asc')->get();
		return View::make('admin.menu.menu')->with('menu', $menu);
		
	}
	
	
	
	
	//--------------------------------END MENU-----------------------------------------------------
	
	
	
	
		//--------------------------------contact details-----------------------------------------------------
	
	public function getContact()
	{

			$content=Content::find(133);
			return View::make('admin.contact.editcontact')->with(array('content' => $content));
			
	}
	

	
	public function postContact()
	{
	
		
		DB::table('content')
            ->where('id', 133)
            ->update(
			array(
			'title' => Input::get('title'),
			'title2' => Input::get('title2'),
			'title3' => Input::get('title3'),
			'bigtext' => Input::get('content'),
			'bigtext2' => Input::get('content2'),
			'bigtext3' => Input::get('content3')
			));
			
	
		
		if(Input::file('myphoto1'))	
			Input::file('myphoto1')->move("portfolio","133_1.jpg");
			
		if(Input::file('myphoto2'))	
			Input::file('myphoto2')->move("portfolio","133_2.jpg");

		if(Input::file('myphoto3'))	
			Input::file('myphoto3')->move("portfolio","133_3.jpg");

		if(Input::file('myphoto4'))	
			Input::file('myphoto4')->move("portfolio","133_4.jpg");
			
		if(Input::file('myphoto5'))	
			Input::file('myphoto5')->move("portfolio","133_5.jpg");

		if(Input::file('myphoto6'))	
			Input::file('myphoto6')->move("portfolio","133_6.jpg");
			
		if(Input::file('myphoto7'))	
			Input::file('myphoto7')->move("portfolio","133_7.jpg");
			
		if(Input::file('myphoto8'))	
			Input::file('myphoto8')->move("portfolio","133_8.jpg");

		if(Input::file('myphoto9'))	
			Input::file('myphoto9')->move("portfolio","133_9.jpg");	
		
		
		$content=Content::find(133);
		return View::make('admin.contact.editcontact')->with(array('content' => $content));
		
		

			
	
	}
	
	
	//--------------------------------end contact details-----------------------------------------------------
	
	
	
	//--------------------------------CONTENT-----------------------------------------------------
	
	public function getContent($id)
	{

		$content=DB::table('content')->select('id')->where("catid","=",$id)->get();		
		
		$videos=DB::table('videos')->select('id','title')->where("father","=","0")->get();	
		$albums=DB::table('albums')->select('id','title')->where("father","=","0")->get();	
	
		
		if(count($content)==0)
		{
			return View::make('admin.content.addcontent')->with(array('id' => $id, 'videos' => $videos, 'albums' => $albums));
		}else{

			$content=Content::find($content[0]->id);
			return View::make('admin.content.editcontent')->with(array('content' => $content, 'videos' => $videos, 'albums' => $albums));
		}		
	}
	
	
	public function postAddcontent($id)
	{
		$content=new Content;
		$content->title=Input::get('title');
		$content->title2=Input::get('title2');
		$content->title3=Input::get('title3');
		$content->videoid=Input::get('videoid');
		$content->photoid=Input::get('albumid');
		$content->bigtext=Input::get('content');
		$content->bigtext2=Input::get('content2');
		$content->bigtext3=Input::get('content3');
		$content->catid=$id;
		$content->save();
		//echo $content->id;
		if(Input::file('myphoto'))	
			Input::file('myphoto')->move("upload", $content->id.".jpg");
			
		$videos=DB::table('videos')->select('id','title')->where("father","=","0")->get();	
		$albums=DB::table('albums')->select('id','title')->where("father","=","0")->get();		
			
		$content=Content::find($content->id);
		return View::make('admin.content.editcontent')->with(array('content' => $content, 'videos' => $videos, 'albums' => $albums));
	
	}
	
	public function postEditcontent($id)
	{
	
		DB::table('content')
            ->where('id', $id)
            ->update(
			array(
			'title' => Input::get('title'),
			'title2' => Input::get('title2'),
			'title3' => Input::get('title3'),
			'videoid' => Input::get('videoid'),
			'photoid' => Input::get('albumid'),
			'bigtext' => Input::get('content'),
			'bigtext2' => Input::get('content2'),
			'bigtext3' => Input::get('content3'),
			));
			
		if(Input::file('myphoto'))	
		{
		
			Input::file('myphoto')->move("upload",$id.".jpg");
		}
			
		$videos=DB::table('videos')->select('id','title')->where("father","=","0")->get();	
		$albums=DB::table('albums')->select('id','title')->where("father","=","0")->get();		
		
		$content=Content::find($id);
		return View::make('admin.content.editcontent')->with(array('content' => $content, 'videos' => $videos, 'albums' => $albums));

			
	
	}
	
	
	//--------------------------------END CONTENT-----------------------------------------------------
	
	
	
	
	
	//--------------------------------CONTENT LIST-----------------------------------------------------
	
	
	public function getListcontent($id)
	{
	
		$content=DB::table('content')->select('id','title','orderid','active','catid','contentdate','place')->where("catid","=",$id)->get();	
		
		return View::make('admin.listcontent.contentlist')->with(array('contentlist' => $content, 'listid' => $id));	
		
	}
	
	
	public function getAddlistcontent($id)
	{
	
		$videos=DB::table('videos')->select('id','title')->where("father","=","0")->get();	
		$albums=DB::table('albums')->select('id','title')->where("father","=","0")->get();
		
		return View::make('admin.listcontent.addcontentlist')->with(array('listid' => $id,'videos' => $videos, 'albums' => $albums));	
		
	}
	
	public function getEditlistcontent($id)
	{
	
		$content=Content::find($id);
		
		$videos=DB::table('videos')->select('id','title')->where("father","=","0")->get();	
		$albums=DB::table('albums')->select('id','title')->where("father","=","0")->get();
		
		
		return View::make('admin.listcontent.editcontentlist')->with(array('contentlist' => $content, 'listid' => $content->catid, 'videos' => $videos, 'albums' => $albums));	
		
	}
	
	
	
	public function postEditlistcontent($id)
	{
	
		
		Content::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'contentdate' => Input::get('contentdate'),
		'place' => Input::get('place'),
	//	'videoid' => Input::get('videoid'),
		//'photoid' => Input::get('albumid'),
		'orderid' => Input::get('orderid'),
	//	'bigtext' => Input::get('content')
		)
		);
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/listcontent/'.$catid);	
		
	}
	
	
	public function postAddlistcontent($id)
	{
	
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
	//	$content->videoid=Input::get('videoid');
		$content->contentdate=Input::get('contentdate');
		$content->place=Input::get('place');
	//	$content->photoid=Input::get('albumid');
		$content->orderid=Input::get('orderid');
	//	$content->bigtext=Input::get('content');
		$content->catid=$id;
		$content->save();
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $content->id.".jpg");

		
		
		return Redirect::to('administrator/listcontent/'.$id);
		
	}
	
	
	public function postDeletecontentlist($catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/listcontent/'.$catid);
		
	}
	
	
	
	//--------------------------------END CONTENT LIST-----------------------------------------------------
	
	
	




	
	//--------------------------------SOUNDS-----------------------------------------------------
	
	
	public function getSound($id)
	{
	
		$content=DB::table('content')->select('id','title','orderid','active','catid','smalltext')->where("catid","=",$id)->get();	
		
		return View::make('admin.sound.sound')->with(array('contentlist' => $content, 'listid' => $id));	
		
	}
	
	public function getAddsound($id)
	{
	
		return View::make('admin.sound.addsound')->with(array('listid' => $id));	
		
	}
	
	
	public function postAddsound($id)
	{
	
		
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->catid=$id;
		$content->save();
		
		

		if(Input::file('soundfile') && Input::file('soundfile')->getClientOriginalExtension()=="mp3")
		{
			$file = Input::file('soundfile');
			Input::file('soundfile')->move("upload", $content->id.".mp3");
		}
		
		
		return Redirect::to('administrator/sound/'.$id);
		
	}
	
	
	
	public function getEditsound($id)
	{
	
		$content=Content::find($id);
		return View::make('admin.sound.editsound')->with(array('contentlist' => $content, 'listid' => $content->catid));	
		
	}
	
	
	public function postEditsound($id)
	{
	
		
		Content::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid')
		)
		);
		
		if(Input::file('soundfile') && Input::file('soundfile')->getClientOriginalExtension()=="mp3")
		{
			$file = Input::file('soundfile');
			Input::file('soundfile')->move("upload", $id.".mp3");
		}
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/sound/'.$catid);	
		
	}
	
	public function postDeletesound($catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/sound/'.$catid);
		
	}
	
	
	
	//--------------------------------END SOUNDS-----------------------------------------------------

	
	
	
	
	//--------------------------------VIDEO-----------------------------------------------------
	
	
	public function getVideocontent($id)
	{
	
		$content=DB::table('content')->select('id','title','orderid','active','catid','smalltext','contentdate')->where("catid","=",$id)->get();	
		
		return View::make('admin.video.videolist')->with(array('contentlist' => $content, 'listid' => $id));	
		
	}
	
	public function getAddvideolist($id)
	{
	
		return View::make('admin.video.addvideolist')->with(array('listid' => $id));	
		
	}
	
	
	public function postAddvideolist($id)
	{
	
		
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->smalltext=Input::get('summary');
		$content->contentdate=Input::get('contentdate');
		$content->catid=$id;
		$content->save();
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $content->id.".jpg");
	
		
		
		return Redirect::to('administrator/videocontent/'.$id);
		
	}
	
	
	
	public function getEditvideolist($id)
	{
	
		$content=Content::find($id);
		return View::make('admin.video.editvideolist')->with(array('contentlist' => $content, 'listid' => $content->catid));	
		
	}
	
	
	public function postEditvideolist($id)
	{
	
		
		Content::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'smalltext' => Input::get('summary'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $id.".jpg");
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/videocontent/'.$catid);	
		
	}
	
	public function postDeletevideolist($catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/videocontent/'.$catid);
		
	}
	
	
	
	//--------------------------------END VIDEO-----------------------------------------------------
	
	
	
	
	
	//--------------------------------ALBUM-----------------------------------------------------
	
	
		public function getAlbumcontent($id)
	{
	
		$content=DB::table('content')->select('id','title','orderid','active','catid','contentdate')->where("catid","=",$id)->get();	
		
		return View::make('admin.album.albumlist')->with(array('contentlist' => $content, 'listid' => $id));	
		
	}
	
	public function getAddalbumlist($id)
	{
	
		
		return View::make('admin.album.addalbumlist')->with(array('listid' => $id));	
		
	}
	
	
	public function postAddalbumlist($id)
	{
	
		
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->contentdate=Input::get('contentdate');
		$content->catid=$id;
		$content->save();
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $content->id.".jpg");
		
		
		return Redirect::to('administrator/albumcontent/'.$id);
		
	}
	
	
	
	public function getEditalbumlist($id)
	{
	
		$content=Content::find($id);
		return View::make('admin.album.editalbumlist')->with(array('contentlist' => $content, 'listid' => $content->catid));	
		
	}
	
	
	public function postEditalbumlist($id)
	{
	
		
		Content::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $id.".jpg");
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/albumcontent/'.$catid);	
		
	}
	
	public function postDeletealbumlist($catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/albumcontent/'.$catid);
		
	}
	
	
	
	public function getInsidealbumlist($id,$catid)
	{
		
		$content=DB::table('content')->where("father","=",$id)->get();
		return View::make('admin.album.insidealbumlist')->with(array('contentlist' => $content, 'listid' => $catid, 'albumid' => $id));	
		
	}
	
	public function getAddinsidealbumlist($id,$catid)
	{
		
		
		return View::make('admin.album.insideaddalbumlist')->with(array('listid' => $catid, 'albumid' => $id));	
		
	}
	
	
	public function getInsideeditalbumlist($id,$catid,$contid)
	{
		
		$content=Content::find($contid);
		return View::make('admin.album.insideeditalbumlist')->with(array('contentlist' => $content, 'listid' => $catid, 'albumid' => $id, 'contid' => $contid));	
		
	}
	
	
	public function postInsideeditalbumlist($id,$catid,$contid)
	{
		
		
		Content::where('id', '=', $contid)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		
		if(Input::file('myphoto'))	
		Input::file('myphoto')->move("upload", $contid.".jpg");
		
		return Redirect::to('administrator/insidealbumlist/'.$id.'/'.$catid);
		
	}
	
	
	public function postInsideaddalbumlist($id,$catid)
	{
		
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->contentdate=Input::get('contentdate');
		$content->father=$id;
		$content->save();
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $content->id.".jpg");


		
		return Redirect::to('administrator/insidealbumlist/'.$id.'/'.$catid);
		
	}
	
	
	
	public function postInsidedeletealbumlist($id,$catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/insidealbumlist/'.$id.'/'.$catid);
		
	}
	
	
	
	//--------------------------------END ALBUM-----------------------------------------------------
	
	
	
	
	
	
	
		
	//-------------------------------- NEWS -----------------------------------------------------
	
	
	public function getNews($id)
	{
	
		$content=DB::table('content')->select('id','title','orderid','active','catid','contentdate','smalltext')->where("catid","=",$id)->get();	
		
		return View::make('admin.news.news')->with(array('contentlist' => $content, 'listid' => $id));	
		
	}
	
	
	public function getNewsjson($id,$page)
	{
	
		$limit=10;
		$start=($page-1)*$limit;
		$content=DB::table('content')->select('id','title','orderid','active','catid','contentdate','smalltext')->where("catid","=",$id)->skip($start)->take(10)->get();	
		
		$res2=array("ResultData" => $content);
		echo json_encode($res2);
		
		
	}
	
	
	
	
	
	public function getAddnews($id)
	{
	
		$videos=DB::table('videos')->select('id','title')->where("father","=","0")->get();	
		$albums=DB::table('albums')->select('id','title')->where("father","=","0")->get();
		
		return View::make('admin.news.addnews')->with(array('listid' => $id,'videos' => $videos,'albums' => $albums));	
		
	}
	
	public function getEditnews($id)
	{
	
		$content=Content::find($id);
		
		$videos=DB::table('videos')->select('id','title')->where("father","=","0")->get();	
		$albums=DB::table('albums')->select('id','title')->where("father","=","0")->get();
		
		return View::make('admin.news.editnews')->with(array('contentlist' => $content, 'listid' => $content->catid,'videos' => $videos,'albums' => $albums));	
		
	}
	
	
    public function getNewjson($id)
	{
	
		$content=Content::find($id);
		
		$res2=array("ResultData" => $content);
		echo json_encode($res2);	
		
	}
	
	
	
	public function postEditnews($id)
	{
	
		
		Content::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'videoid' => Input::get('videoid'),
		'photoid' => Input::get('albumid'),
		'orderid' => Input::get('orderid'),
		'bigtext' => Input::get('content'),
		'smalltext' => Input::get('summary'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
	
			
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $id.".jpg");
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/news/'.$catid);	
		
	}
	
	
	public function postAddnews($id)
	{
	
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
	 	$content->videoid=Input::get('videoid');
	 	$content->photoid=Input::get('albumid');
		$content->orderid=Input::get('orderid');
		$content->bigtext=Input::get('content');
		$content->smalltext=Input::get('summary');
		$content->contentdate=Input::get('contentdate');
		$content->catid=$id;
		$content->save();
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $content->id.".jpg");

		
		
		return Redirect::to('administrator/news/'.$id);
		
	}
	
	
	public function postDeletenews($catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/news/'.$catid);
		
	}
	
	
	
	//--------------------------------END NEWS-----------------------------------------------------
	
	
	
	
	
		//--------------------------------ALBUM SOUNDS-----------------------------------------------------
	
	
	public function getAlbumsound($id)
	{
	
		$content=DB::table('content')->select('id','title','orderid','active','catid')->where("catid","=",$id)->get();	
		
		return View::make('admin.albumsound.albumsound')->with(array('contentlist' => $content, 'listid' => $id));	
		
	}
	
	public function getAddalbumsound($id)
	{
	
		
		return View::make('admin.albumsound.addalbumsound')->with(array('listid' => $id));	
		
	}
	
	
	public function postAddalbumsound($id)
	{
	
		
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->bigtext=Input::get('content');
		$content->orderid=Input::get('orderid');
		$content->contentdate=Input::get('contentdate');
		$content->catid=$id;
		$content->save();
		
		
			
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $content->id.".jpg");
		
		
		
		return Redirect::to('administrator/albumsound/'.$id);
		
	}
	
	
	
	public function getEditalbumsound($id)
	{
	
		$content=Content::find($id);
		return View::make('admin.albumsound.editalbumsound')->with(array('contentlist' => $content, 'listid' => $content->catid));	
		
	}
	
	
	public function postEditalbumsound($id)
	{
	
		
		Content::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'bigtext' => Input::get('content'),
		'orderid' => Input::get('orderid'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("upload", $id.".jpg");
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/albumsound/'.$catid);	
		
	}
	
	public function postDeletealbumsound($catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/albumsound/'.$catid);
		
	}
	
	
	
	public function getInsidealbumsound($id,$catid)
	{
		
		$content=DB::table('content')->where("father","=",$id)->get();
		return View::make('admin.albumsound.insidealbumsound')->with(array('contentlist' => $content, 'listid' => $catid, 'albumid' => $id));	
		
	}
	
	public function getAddinsidealbumsound($id,$catid)
	{
		
		
		return View::make('admin.albumsound.insideaddalbumsound')->with(array('listid' => $catid, 'albumid' => $id));	
		
	}
	
	
	public function getInsideeditalbumsound($id,$catid,$contid)
	{
		
		$content=Content::find($contid);
		return View::make('admin.albumsound.insideeditalbumsound')->with(array('contentlist' => $content, 'listid' => $catid, 'albumid' => $id, 'contid' => $contid));	
		
	}
	
	
	public function postInsideeditalbumsound($id,$catid,$contid)
	{
		
		
		Content::where('id', '=', $contid)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		
		
		if(Input::file('soundfile') && Input::file('soundfile')->getClientOriginalExtension()=="mp3")
		{
			$file = Input::file('soundfile');
			Input::file('soundfile')->move("upload", $id.".mp3");
		}
		
		return Redirect::to('administrator/insidealbumsound/'.$id.'/'.$catid);
		
	}
	
	
	public function postInsideaddalbumsound($id,$catid)
	{
		
		$content=new Content;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->contentdate=Input::get('contentdate');
		$content->father=$id;
		$content->save();
		
		
		
		if(Input::file('soundfile') && Input::file('soundfile')->getClientOriginalExtension()=="mp3")
		{
			$file = Input::file('soundfile');
			Input::file('soundfile')->move("upload", $content->id.".mp3");
		}	
			
			


		
		return Redirect::to('administrator/insidealbumsound/'.$id.'/'.$catid);
		
	}
	
	
	
	public function postInsidedeletealbumsound($id,$catid)
	{
		
		$delid=Input::get('delid');
		DB::table('content')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/insidealbumsound/'.$id.'/'.$catid);
		
	}
	
	
	
	//--------------------------------END ALBUM SOUNDS-----------------------------------------------------
	
	
	
	
	
	
	
	
	//--------------------------------ALBUM GENERAL-----------------------------------------------------
	
	
	public function getAlbumgeneral()
	{
	
		$content=DB::table('albums')->select('id','title','orderid','active','catid','contentdate')->where("father","=","0")->orderBy('orderid','asc')->get();	
		
		return View::make('admin.albumgeneral.albumgeneral')->with(array('contentlist' => $content));	
		
	}
	
	public function getAddalbumgeneral()
	{
	
		
		return View::make('admin.albumgeneral.addalbumgeneral');	
		
	}
	
	
	public function postAddalbumgeneral()
	{
	
		
		$content=new Albums;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->contentdate=Input::get('contentdate');
		$content->save();
		
	
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("albums", $content->id.".jpg");
		
		return Redirect::to('administrator/albumgeneral');
		
	}
	
	
	
	public function getEditalbumgeneral($id)
	{
	
		$content=Albums::find($id);
		return View::make('admin.albumgeneral.editalbumgeneral')->with(array('contentlist' => $content, 'listid' => $content->catid));	
		
	}
	
	
	public function postEditalbumgeneral($id)
	{
	
		
		Albums::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("albums", $id.".jpg");
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/albumgeneral/'.$catid);	
		
	}
	
	public function postDeletealbumgeneral()
	{
		
		$delid=Input::get('delid');
		DB::table('albums')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/albumgeneral');
		
	}
	
	
	
	public function getInsidealbumgeneral($id)
	{
		
		$content=DB::table('albums')->where("father","=",$id)->get();
		return View::make('admin.albumgeneral.insidealbumgeneral')->with(array('contentlist' => $content, 'albumid' => $id));	
		
	}
	
	public function getAddinsidealbumgeneral($id)
	{
		
		
		return View::make('admin.albumgeneral.insideaddalbumgeneral')->with(array('albumid' => $id));	
		
	}
	
	
	public function getInsideeditalbumgeneral($id,$contid)
	{
		
		$content=Albums::find($contid);
		return View::make('admin.albumgeneral.insideeditalbumgeneral')->with(array('contentlist' => $content, 'albumid' => $id, 'contid' => $contid));	
		
	}
	
	
	public function postInsideeditalbumgeneral($id,$contid)
	{
		
		
		Albums::where('id', '=', $contid)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		
		if(Input::file('myphoto'))	
		Input::file('myphoto')->move("albums", $contid.".jpg");
		
		return Redirect::to('administrator/insidealbumgeneral/'.$id);
		
	}
	
	
	public function postInsideaddalbumgeneral($id)
	{
		
		$content=new Albums;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->father=$id;
		$content->save();
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("albums", $content->id.".jpg");


		
		return Redirect::to('administrator/insidealbumgeneral/'.$id);
		
	}
	
	
	
	public function postInsidedeletealbumgeneral($id)
	{
		
		$delid=Input::get('delid');
		DB::table('albums')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/insidealbumgeneral/'.$id);
		
	}
	
	
	
	//--------------------------------END ALBUM GENERAL-----------------------------------------------------
	
	
	
	
	
	
	//--------------------------------VIDEO GENERAL-----------------------------------------------------
	
	
			public function getVideogeneral()
	{
	
		$content=DB::table('videos')->select('id','title','orderid','active','catid','contentdate')->where("father","=","0")->orderBy('orderid','asc')->get();	
		
		return View::make('admin.videogeneral.videogeneral')->with(array('contentlist' => $content));	
		
	}
	
	public function getAddvideogeneral()
	{
	
		
		return View::make('admin.videogeneral.addvideogeneral');	
		
	}
	
	
	public function postAddvideogeneral()
	{
	
		
		$content=new Videos;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->contentdate=Input::get('contentdate');
		$content->save();
		
	
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("videos", $content->id.".jpg");
		
		return Redirect::to('administrator/videogeneral');
		
	}
	
	
	
	public function getEditvideogeneral($id)
	{
	
		$content=Videos::find($id);
		return View::make('admin.videogeneral.editvideogeneral')->with(array('contentlist' => $content, 'listid' => $content->catid));	
		
	}
	
	
	public function postEditvideogeneral($id)
	{
	
		
		Videos::where('id', '=', $id)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("videos", $id.".jpg");
		
		
		$catid=Input::get('catid');
		return Redirect::to('administrator/videogeneral/'.$catid);	
		
	}
	
	public function postDeletevideogeneral()
	{
		
		$delid=Input::get('delid');
		DB::table('videos')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/videogeneral');
		
	}
	
	
	
	public function getInsidevideogeneral($id)
	{
		
		$content=DB::table('videos')->where("father","=",$id)->get();
		return View::make('admin.videogeneral.insidevideogeneral')->with(array('contentlist' => $content, 'albumid' => $id));	
		
	}
	
	public function getAddinsidevideogeneral($id)
	{
		
		
		return View::make('admin.videogeneral.insideaddvideogeneral')->with(array('albumid' => $id));	
		
	}
	
	
	public function getInsideeditvideogeneral($id,$contid)
	{
		
		$content=Videos::find($contid);
		return View::make('admin.videogeneral.insideeditvideogeneral')->with(array('contentlist' => $content, 'albumid' => $id, 'contid' => $contid));	
		
	}
	
	
	public function postInsideeditvideogeneral($id,$contid)
	{
		
		
		Videos::where('id', '=', $contid)->update(
		array(
		'title' => Input::get('title'),
		'active' => Input::get('active'),
		'orderid' => Input::get('orderid'),
		'smalltext' => Input::get('summary'),
		'contentdate' => Input::get('contentdate')
		)
		);
		
		
		if(Input::file('myphoto'))	
		Input::file('myphoto')->move("albums", $contid.".jpg");
		
		return Redirect::to('administrator/insidevideogeneral/'.$id);
		
	}
	
	
	public function postInsideaddvideogeneral($id)
	{
		
		$content=new Videos;
		$content->title=Input::get('title');
		$content->active=Input::get('active');
		$content->orderid=Input::get('orderid');
		$content->smalltext=Input::get('summary');
		$content->father=$id;
		$content->save();
		
		if(Input::file('myphoto'))
			Input::file('myphoto')->move("videos", $content->id.".jpg");


		
		return Redirect::to('administrator/insidevideogeneral/'.$id);
		
	}
	
	
	
	public function postInsidedeletevideogeneral($id)
	{
		
		$delid=Input::get('delid');
		DB::table('videos')->where("id","=",$delid)->delete();
		
		return Redirect::to('administrator/insidevideogeneral/'.$id);
		
	}
	
	
	
	
	
	//--------------------------------END VIDEO GENERAL-----------------------------------------------------
	
	
	
	
	
	
	
	
	

}
