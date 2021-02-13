<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UserExport;
use App\Imports\UserImport;
use App\Models\User;
use Session;

class UserExcelController extends Controller
{
    /**
     * Handle the default landing page
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Export an excel data for users by specifying the format
     * @return \Illuminate\Support\Collection
     */
    public function exportExcelData($format)
    {
        Session::put('success', 'Your file is exported successfully.');
        return (new UserExport)->download('users.'.$format);
    }

    /**
     * Handing importing data for users
    * @return \Illuminate\Support\Collection
    */
    public function importExcelData(Request $request) 
    {
        \Excel::import(new UserImport,$request->fileToImport);

        Session::put('success', 'Your file is imported successfully in database.');
           
        return back();
    }
}
