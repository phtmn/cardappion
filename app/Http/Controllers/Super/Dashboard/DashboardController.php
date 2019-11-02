<?php

namespace App\Http\Controllers\Super\Dashboard;

use App\Http\Controllers\Super\BaseController;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
  /**
   * Return index
   **/
  public function index()
  {
    // Return view
    return view('super.dashboard.index');
  }
}
