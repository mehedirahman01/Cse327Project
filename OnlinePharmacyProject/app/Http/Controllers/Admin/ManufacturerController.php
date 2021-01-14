<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacturer;

/**
 * @group Manufacturer Controller
 *
 * Handle Manufacturers of the application.
 */

class ManufacturerController extends Controller
{
    /**
     * Manufacturer View
     *
     * Returns the view of manufacturer
     * @bodyParam manufacturers array required All manufacturer data from table
     * @authenticated
     */
    public function manufacturers(){
        $manufacturers = Manufacturer::get();
        return view('admin.manufacturers.manufacturers')->with(compact('manufacturers'));
    }
}
