<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\User;


class ManageAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data=User::all();
        return view('admin.manageAccount',compact('data'));
    } 
    public function showAccount(){
        $Account = DB::table('users')-> select('*');
        return Datatables::of($Account)  ->addColumn('action', function ($row) {
        return '<a href="#" class="text-success" data-toggle="modal" 
                  data-target="#acountDetail'. $row->id.'"><i class="fa fa-eye"></i></a>
                <a href="#" class="text-info" data-toggle="modal" 
            data-target="#EditProfileAdmin' . $row->id . '"><i class="fa fa-edit"></i></a>
                <a href="#" class="text-danger" data-toggle="modal" 
            data-target="#deleteModal'. $row->id .'"><i class="fa fa-trash"></i></a>';
        })
        ->make(true);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
             'fname'=>'required',
             'lname'=>'required',
             'type'=>'required',
             'status' => 'required'
        ]);

        User::where('id', $id)->update([
            'fname'=>$request['fname'],
            'lname'=>$request['lname'],
            'type'=>$request['type'],
            'status' => $request['status']
        ]);
        return redirect()->route('adminAccount')->with(['success' => 'Update Account Successfully']);
    }
    public function show($id)
    {
        $userId = User::find($id);
        return view('/adminAccount', compact('userId', 'id'));
    }
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('adminAccount')->with('success','Account Deleted Successfuly!');
    }
}
