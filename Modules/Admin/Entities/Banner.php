<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';

    protected $fillable = [
        'id',
        'ban_title_th',
        'ban_title_en',
        'ban_detail_th',
        'ban_detail_en',
        
        'file',
        '_token'
    ];
}
