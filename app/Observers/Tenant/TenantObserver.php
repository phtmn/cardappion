<?php
/**
 * Created by PhpStorm.
 * User: matthaus
 * Date: 26/03/19
 * Time: 11:08
 */

namespace App\Observers\Tenant;


use App\Tenant\ManagerTenant;
use Illuminate\Database\Eloquent\Model;

class TenantObserver
{
    public function creating(Model $model){

        $tenant = app(ManagerTenant::class)->getTenantIdentify();

        $model->setAttribute('tenant_id',$tenant);
    }
}