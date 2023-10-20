<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;



class ManageAccountController extends Controller
{
    public function index(){
        return view('admin.manageAccount');
    } 
    public function showAccount(){
        $Account = DB::table('users')-> select('*');

        return Datatables::of($Account)  ->addColumn('action', function ($row) {
            
        return '<a href="#" class="text-success" data-toggle="modal" 
                  data-target="#detailHotspot'. $row->id.'"><i class="fa fa-eye"></i></a>
                <a href="#" class="text-info" data-toggle="modal" 
            data-target="#editHotspot' . $row->id . '"><i class="fa fa-edit"></i></a>
                <a href="#" class="text-danger" data-toggle="modal" 
            data-target="#deleteHotspot'. $row->id .'"><i class="fa fa-trash"></i></a>';
        })
        ->make(true);
    }
}
