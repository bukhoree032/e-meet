<?php

namespace Modules\Admin\Repositories;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\System;
use Modules\Admin\Entities\News;
use Modules\Admin\Entities\Banner;

use Illuminate\Support\Str;
use App\Http\Controllers\UploadeFileController;

class Repository 
{
    public function __construct()
    {
        $this->classModelNews = News::class;
        $this->classModelSystem = System::class;
        $this->classModelBanner = Banner::class;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function index($db)
    {
        $data = \DB::table($db)
                        ->orderBy('id', 'desc')
                        ->get();
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($db)
    {
        $data = \DB::table($db)
                        ->orderBy('id', 'desc')
                        ->get();
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function ShowId($id,$db)
    {
        $data = \DB::table($db)
                        ->where('id',$id)
                        ->get()['0'];
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function insert($request,$db)
    {
        $insert = $this->$db::create($request);
        return $insert;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update($request,$id,$db)
    {
        $result = $this->$db::findOrFail($id);
        $data = $result->update($request);
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delet($id,$db)
    {
        $result = $this->$db::findOrFail($id);

        return $result->delete();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function districts()
    {
        $data = \DB::table('districts')
                        ->join('amphures', 'districts.amphure_id', '=', 'amphures.id')
                        ->join('provinces', 'amphures.province_id', '=', 'provinces.id')
                        ->where('provinces.id','>=', 74)
                        ->where('provinces.id','<=', 76)
                        ->select('districts.id as id_districts','districts.name_th as name_districts','amphures.id as id_amphures','amphures.name_th as name_amphures','provinces.id as id_provinces','provinces.name_th as name_provinces','districts.zip_code as zip_code_districts')
                        
                        ->get();
        return $data;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function ProvinceJoin($id)
    {
        $data = \DB::table('districts')
                        ->join('amphures', 'districts.amphure_id', '=', 'amphures.id')
                        ->join('provinces', 'amphures.province_id', '=', 'provinces.id')
                        ->where('districts.id', $id)
                        ->select('districts.id as id_districts','districts.name_th as name_districts','amphures.id as id_amphures','amphures.name_th as name_amphures','provinces.id as id_provinces','provinces.name_th as name_provinces')
                        
                        ->get();
        // $insert = $this->$db::create($data);
        return $data;
    }
}

