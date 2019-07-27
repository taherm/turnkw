<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;
use App\Menu;
use App\Home;
use App\About;
use Intervention\Image\Facades\Image;
use File;
use Illuminate\Support\Facades\App;
use App\Portfolio;
use App\Page;

class AdminController extends Controller
{
    const UPLOAD_PATH =  'uploads/';

    public function index()
    {
        //  $ser=Service::all();
        return view('admin.index');
    }

    public function show()
    {
        $ser = Page::all();
        return view('admin.pages', compact('ser'));
    }

    public function show_service()
    {
        $ser = Service::all();
        return view('admin.services', compact('ser'));
    }

    public function delete_slider($id)
    {
        $slide = \App\Slider::find($id);
        $slide->delete();
        File::delete('uploads/' . $slide->image);
        session()->flash('error', 'Home Image Deleted!');
        return redirect('/admin');
    }

    public function add_slider(Request $request)
    {

        $this->validate(request(), [
            'image' => 'required'
        ]);
        $slider = new Slider();
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = self::UPLOAD_PATH . $imageName;
        Image::make($image)->save($savePath, 100);
        $fullImagePath = $imageName;
        $slider->image = $fullImagePath;
        $slider->save();
        session()->flash('message', 'Home Image Added!');
        return redirect('/admin/add-slider');
    }

    public function add_portfolio(Request $request)
    {
        $this->validate(request(), [
            'image' => 'required'
        ]);
        $portfolio = new Portfolio;
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath = $imageName;
        $portfolio->image = $fullImagePath;
        $portfolio->save();
        session()->flash('message', 'Portfolio Image Added!');
        return redirect('/admin/add-portfolio');
    }

    public function delete_portfolio($id)
    {
        $portfolio = \App\Portfolio::find($id);
        $portfolio->delete();
        File::delete('uploads/' . $portfolio->image);
        session()->flash('error', 'Portfolio Image Deleted!');
        return redirect('/admin');
    }



    public function edit_menu($id)
    {
        $serv = Menu::find($id);
        return view('admin.menu_edit', compact('serv'));
    }


    public function submenu()
    {
        $this->validate(request(), [
            'title' => 'required'
        ]);
        $menu = new Menu;
        $menu->title = request('title');
        $menu->parent_id = Menu::where('title', request('submenu'))->first()->id;
        $menu->url = "";
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
        //   session()->flash('message', 'Main Menu Added!');
        return redirect('/admin');
    }


    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.edit', compact('page'));
    }

    public function edit_service($id)
    {
        $serv = Service::find($id);
        return view('admin.edit-service', compact('serv'));
    }

    public function update($id)
    {
        $page = Page::find($id);
        $fn = $page->title_en;
        $page->title_en = request('title_en');
        //  $page->title_ar = request('title_ar');
        $page->description_en = request('description_en');
        // $page->description_ar = request('description_ar');

        $image = request()->image;
        if ($image == null) { } else {
            $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
            $savePath = public_path(self::UPLOAD_PATH . $imageName);
            Image::make($image)->save($savePath, 100);
            $fullImagePath = $imageName;
            $page->image = $fullImagePath;
        }
        //  $page->Menu_id = Menu::where('title_en', request('menu'))->first()->id;
        $page->save();
        session()->flash('message', 'Page Updated!');

        return redirect('/admin');
    }

    public function update_service($id)
    {
        $serv = Service::find($id);
        $fn = $serv->title_en;
        $serv->title_en = request('title_en');
        //  $serv->title_ar = request('title_ar');
        $serv->description_en = request('description_en');
        //  $serv->description_ar = request('description_ar');

        $image = request()->image;
        if ($image == null) { } else {
            $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
            $savePath = public_path(self::UPLOAD_PATH . $imageName);
            Image::make($image)->save($savePath, 100);
            $fullImagePath = $imageName;
            $serv->image = $fullImagePath;
        }
        //  $serv->Menu_id = Menu::where('title_en', request('menu'))->first()->id;
        $serv->save();
        session()->flash('message', 'Service Updated!');

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
        // session()->flash('message', 'Menu Updated!');

        return redirect('/admin');
    }


    public function store_page()
    {
        $this->validate(request(), [
            'title_en' => 'required',
            'description_en' => 'required',
            'image' => 'required'
        ]);
        $page = new Page();
        $page->title_en = request('title_en');
        //$page->title_ar = request('title_ar');
        $page->description_en = request('description_en');
        //$page->description_ar = request('description_ar');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath = $imageName;
        $page->image = $fullImagePath;
        // $page->Menu_id = Menu::where('title_en', request('submenu'))->first()->id;
        $page->save();
        session()->flash('message', 'Page Added!');

        return redirect('/admin');
    }

    public function store_service()
    {
        $this->validate(request(), [
            'title_en' => 'required',
            'description_en' => 'required',
            'image' => 'required'
        ]);
        $service = new Service();
        $service->title_en = request('title_en');
        //   $service->title_ar = request('title_ar');
        $service->description_en = request('description_en');
        //  $service->description_ar = request('description_ar');
        $image = request()->image;
        $imageName = md5(uniqid(rand() * (time()))) . '.' . $image->getClientOriginalExtension();
        $savePath = public_path(self::UPLOAD_PATH . $imageName);
        Image::make($image)->save($savePath, 100);
        $fullImagePath = $imageName;
        $service->image = $fullImagePath;
        //   $service->Menu_id = Menu::where('title_en', request('submenu'))->first()->id;
        $service->save();
        session()->flash('message', 'Service Added!');

        return redirect('/admin');
    }


    public function hometext(Request $request)
    {
        $this->validate(request(), [
            'description' => 'required',
        ]);
        // dd($request);
        Home::first()->update($request->all());
        session()->flash('message', 'Home Text Added!');
        return redirect('/admin');
    }

    public function aboutustext(Request $request)
    {
        $this->validate(request(), [
            'description' => 'required',
        ]);
        // dd($request);
        About::first()->update($request->all());
        session()->flash('message', 'About Us Text Added!');
        return redirect('/admin');
    }

    public function destroy_page($id)
    {
        $page = Page::find($id);
        File::delete('uploads/' . $page->image);
        $page->delete();
        session()->flash('error', 'Page Deleted!');

        return redirect('/admin');
    }

    public function destroy_service($id)
    {
        $serv = Service::find($id);
        File::delete('uploads/' . $serv->image);
        $serv->delete();
        session()->flash('error', 'Service Deleted!');

        return redirect('/admin');
    }

    public function del($id)
    {
        $menu = Menu::find($id)->delete();
        //session()->flash('message', 'Main Menu Deleted!');

        return redirect('/admin');
    }
}
