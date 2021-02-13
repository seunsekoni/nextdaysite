<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;
use App\Exports\UserImport;
use App\Models\User;

class UserExcelTest extends TestCase
{

    public function export_details($format)
    {
        Excel::fake();
        $user = User::find(1);
        $response = $this->get('export/'.$format.'/');
        return $user;
    }

    public function test_if_excel_can_be_downloaded_as_xls()
    {
        $user = $this->export_details('xls');

        Excel::assertDownloaded('users.xls', function(UserExport $export) use ($user){
            // Assert that the correct export is downloaded.
            return $export->query()->get()->contains('name', $user->name);
        });
    }

    

    public function test_if_excel_can_be_downloaded_as_xlsx()
    {
        $user = $this->export_details('xlsx');

        Excel::assertDownloaded('users.xlsx', function(UserExport $export) use ($user){
            // Assert that the correct export is downloaded.
            return $export->query()->get()->contains('name', $user->name);
        });
    }

    public function test_if_excel_can_be_downloaded_as_csv()
    {
        $user = $this->export_details('csv');
        Excel::assertDownloaded('users.csv', function(UserExport $export) use ($user){
            // Assert that the correct export is downloaded.
            return $export->query()->get()->contains('name', $user->name);
        });
    }

}
