<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Menu;
use Intervention\Image\Facades\Image;
use File;



class AdminController extends Controller
{
    const UPLOAD_PATH =  '/uploads/';

    public function index()
    {
      //  $ser=Service::all();
        return view('admin.index',compact(session('message')));
    }

    public function show()
    {
        $ser=Service::all();
        return view('admin.pages',compact('ser'));
    }


    public function delete_slider()
    {
        Slider::where('image',request('image'))->delete();
        session()->flash('message','Slider Deleted!');
        
        return redirect('/admin/delete-slider');
    }

    public function add_slider(Request $request)
    {
        
        $this->validate(request(),[
            'image'=>'required'
             ]);
        $slide=new Slider;
        //$image=request()->image;
        //ini_set('memory_limit','256M');
        $path = $request->file('image')->store('public/uploads');
        $path_parts = pathinfo($path);
//dd($path_parts['basename']);
        //$fullImagePath =$imageName;
        $slide->image=$path_parts['basename'];
        
        $slide->save();
        session()->flash('message','Slider Added!');
        
        return redirect('/admin');
    }

    public function add_album(Request $request)
    {
        $this->validate(request(),[
            'image'=>'required'
             ]);
        $album=new Album;
        $image=request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $album->image=$fullImagePath;
        $album->save();
        session()->flash('message','Image Added!');
        return redirect('/admin/add-album');
    }

    public function delete_album()
    {
        $album=Album::find(request('image'));
        File::delete('uploads/'.$album->image);
        $album->delete();
        session()->flash('message','Image Deleted!');
        
        return redirect('/admin/delete-album');
    }

    

    public function edit_menu($id)
    {
        $serv=Menu::find($id);
        return view('admin.menu_edit',compact('serv'));
    }
    

    public function submenu()
    {
        $this->validate(request(),[
        'title'=>'required'
         ]);
        $menu=new Menu;
        $menu->title=request('title');
        $menu->parent_id=Menu::where('title',request('submenu'))->first()->id;
        $menu->url="";
        $menu->save();
        return redirect('/admin');
    }

    
    public function mainmenu()
    {
        $this->validate(request(), [
            'title_en' => 'required'
        ]);
        $this->validate(request(), [
            'title_ar' => 'required'
        ]);
        $menu = new Menu();
        $menu->title_en = request('title_en');
        $menu->title_ar = request('title_ar');
        $menu->save();
        session()->flash('message','Main Menu Added!');
        return redirect('/admin');
    }


    public function edit($id)
    {
        $serv=Service::find($id);
        return view('admin.edit',compact('serv'));
    }

    public function update($id)
    {
        $serv=Service::find($id);
        $fn=$serv->title_en;
        $serv->title_en=request('title_en');
        $serv->title_ar=request('title_ar');
        $serv->description_en=request('description_en');
        $serv->description_ar=request('description_ar');
        
        $image=request()->image;
        if($image==null)
        {

        }
        else{
            $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
            $savePath = public_path(self::UPLOAD_PATH . $imageName);
            Image::make($image)->save($savePath, 100);
            $fullImagePath =$imageName;
            $serv->image=$fullImagePath;
            
        }
        $serv->Menu_id=Menu::where('title_en',request('menu'))->first()->id;
        $serv->save();
        session()->flash('message','Page Updated!');
        
        return redirect('/admin');
    }


    public function updatemenu($id)
    {
        $temp = Menu::find($id);
        $menu_name = $temp->title_en;
        $menu_name_ar = $temp->title_ar;
        
        $menu = Menu::where('title_en', "=", $menu_name)->first();
        $menu->title_en = request('title_en');
        $menu->title_ar = request('title_ar');
        
        $menu->save();
        session()->flash('message','Menu Updated!');
        
        return redirect('/admin');
    }


    public function store()
    {
        $this->validate(request(),[
            'title_ar'=>'required',
            'title_en'=>'required',
            'description_en'=>'required',
            'description_ar'=>'required',
            'image'=>'required'
             ]);
        $serv=new Service;
        $serv->title_en=request('title_en');
        $serv->title_ar=request('title_ar');
        $serv->description_en=request('description_en');
        $serv->description_ar=request('description_ar');
        $image=request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath =$imageName;
        $serv->image=$fullImagePath;
        $serv->Menu_id=Menu::where('title_en',request('submenu'))->first()->id;
        $serv->save();
        session()->flash('message','Page Added!');
        
        return redirect('/admin');
    }

    public function destroy($id)
    {
        $serv=Service::find($id);
        File::delete('uploads/'.$serv->image);
        $serv->delete();
        session()->flash('message','Page Deleted!');
        
        return redirect('/admin');
    }

    public function del($id)
    {
        $menu= Menu::find($id)->delete();
        session()->flash('message','Main Menu Deleted!');
        
        return redirect('/admin');
    }
}
