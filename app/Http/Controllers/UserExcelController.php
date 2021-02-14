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
        try {
            Session::put('status', 'Your file is exported successfully.');
            return (new UserExport)->download('users.'.$format);
            
        } catch (\Throwable $th) {
            \Log::error($th);
            Session::put('status', $th->getMessage());
            return back();
        }
    }

    /**
     * Handing importing data for users
    * @return \Illuminate\Support\Collection
    */
    public function importExcelData(Request $request) 
    {
        try {
            
            \Excel::import(new UserImport,$request->fileToImport);
    
            Session::put('status', 'Your file is imported successfully in database.');
               
            return back();
        } catch (\Throwable $th) {
            \Log::error($th);
            Session::put('status', $th->getMessage());
            return back();
        }
    }
}
