<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Repositories\Repository as Repository;

use Illuminate\Support\Str;
use App\Http\Controllers\UploadeFileController;

class SystemController extends UploadeFileController
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
        $page_title = 'ตั้งค่าทั่วไป';
        $page_description = '';
        $page = compact('page_title', 'page_description');
        
        $db = "system";
        $data['result'] = $this->Repository->index($db);

        return view('admin::system.system',compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'ตั้งค่าทั่วไป';
        $page_description = '';
        $page = compact('page_title', 'page_description');
        
        $db = "system";
        $data['result'] = $this->Repository->index($db);

        return view('admin::system.create',compact('page_title', 'page_description'),$data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function insert(Request $request)
    {
        $uploade = new UploadeFileController();
        if (!empty($request['files_icon'])) {
            $request['file_icon'] = $uploade->uploadImage(
                $request['files_icon'],
                'system',
                Str::random(5)
            );
        }

        if (!empty($request['files_logo'])) {
            $request['file_logo'] = $uploade->uploadImage(
                $request['files_logo'],
                'system',
                Str::random(5)
            );
        }
        
        if (!empty($request['files_background'])) {
            $request['file_background'] = $uploade->uploadImage(
                $request['files_background'],
                'system',
                Str::random(5)
            );
        }

        if($request->id == ''){
            $this->Repository->insert($request->all(),'classModelSystem');
        }else{
            $this->Repository->update($request->all(),$request->id,'classModelSystem');
        }
        return redirect()->route('index.system');
    }
}
