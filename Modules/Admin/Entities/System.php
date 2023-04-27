<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'system';

    protected $fillable = [
        'id',
        'sys_nameweb_th',
        'sys_nameweb_en',
        'sys_name_th',
        'sys_name_en',
        'sys_subname_th',
        'sys_subname_en',
        'sys_facebook',
        'sys_facebook_link',
        'sys_phon',
        'sys_mail',
        'sys_address_th',
        'sys_address_en',
        
        'file_icon',
        'file_logo',
        'file_background',
        '_token'
    ];
}
