<?php

namespace App\Http\Controllers\Super\Dashboard;

use App\Http\Controllers\Super\BaseController;
use Illuminate\Http\Request;
use App\Models\Tenant;

class DashboardController extends BaseController
{
  /**
   * Return index
   **/
  public function index()
  {
    return view('super.dashboard.index', [
      'data' => $data = Tenant::all()
    ]);// Return view
    
    // return view('super.dashboard.index');
  }
}
