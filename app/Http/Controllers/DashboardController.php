<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        /* [TODO: Turn this into a service] */
        $strDBName = "Tables_in_" . env('DB_DATABASE');
        $rawTables = DB::select('SHOW TABLES');
        $output = [];
        foreach($rawTables as $table) {
            $output[] = $table->{$strDBName};
        }
        return Inertia::render('Dashboard', ['tables' => $output ?? []]);
    }
}
