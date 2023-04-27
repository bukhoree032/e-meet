<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Repositories\Repository as Repository;

use Illuminate\Support\Str;
use App\Http\Controllers\UploadeFileController;

class BannerController extends UploadeFileController
{
    protected $Repository;

    public function __construct(Repository $Repository)
    {
        $this->Repository = $Repository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $page_title = 'ตั้งค่าแบนเนอร์';
        $page_description = '';
        $page = compact('page_title', 'page_description');
        
        $db = "banner";
        $data['result'] = $this->Repository->index($db);

        return view('admin::banner.banner',compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'ตั้งค่าแบนเนอร์';
        $page_description = '';
        $page = compact('page_title', 'page_description');

        return view('admin::banner.create',compact('page_title', 'page_description'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function insert(Request $request)
    {
        $uploade = new UploadeFileController();
        if (!empty($request['files'])) {
            $request['file'] = $uploade->uploadImage(
                $request['files'],
                'banner',
                Str::random(5)
            );
        }

        $this->Repository->insert($request->all(),'classModelBanner');

        return redirect()->route('index.banner');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function detail($id)
    {
        $page_title = 'ตั้งค่าแบนเนอร์';
        $page_description = '';

        $db = "banner";
        $data['result'] = $this->Repository->ShowId($id,$db);

        return view('admin::banner.detail',compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page_title = 'ตั้งค่าแบนเนอร์';
        $page_description = '';

        $db = "banner";
        $data['result'] = $this->Repository->ShowId($id,$db);

        return view('admin::banner.edit',compact('page_title', 'page_description'),$data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $uploade = new UploadeFileController();
        if (!empty($request['files'])) {
            $request['file'] = $uploade->uploadImage(
                $request['files'],
                'banner',
                Str::random(5)
            );
        }

        $this->Repository->update($request->all(),$id,'classModelBanner');

        return redirect()->route('index.banner');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delet($id)
    {
        $this->Repository->delet($id,'classModelBanner');

        return redirect()->route('index.banner');
    }
}
