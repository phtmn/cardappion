<?php
/**
 * Created by PhpStorm.
 * User: matthaus
 * Date: 26/03/19
 * Time: 10:52
 */

namespace App\Tenant;


class ManagerTenant
{

    public function getTenantIdentify(){

        return auth()->user()->tenant->id;
    }
}