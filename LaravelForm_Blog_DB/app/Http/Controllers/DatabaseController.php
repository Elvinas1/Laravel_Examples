<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseController extends Controller
{
    public function index()
    {
        $tableNames = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();

        $allData = [];

        foreach ($tableNames as $tableName) {
            $allData[$tableName] = DB::table($tableName)->get();
        }

        return view('database.index', ['allData' => $allData]);
    }
}
