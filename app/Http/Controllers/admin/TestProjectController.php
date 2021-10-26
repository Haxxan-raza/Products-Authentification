<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateTest;
use App\Models\AdminData;
use Illuminate\Database\Eloquent\Model;
use App\Facades\TestFacade;
use App\Services\TestInsertService;
use Illuminate\Pagination\Paginator;
use Auth;
class TestProjectController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showCate() {
    return view('admin.categories.products');
  }

  public function index()
    {
        $AdminRecords = User::with('admins')->where('type', 1)->get();
        return view('admin.pages.TestForm', compact('AdminRecords'));
    }
     //store Data in Database
     public function store( StoreUser $request ,TestInsertService $data)
     {
        //  $input = $request->all();
         $data->storeForm($request);
         
            return redirect()->back()->with('success', 'User created successfully.');
     }

     public function showRecord() {
      $users = AdminData::paginate(5);
      return view('admin.pages.showrecord', compact('users'));
     }

       //Edit Record
    public function editRecord($id) {
      $allrecord= AdminData::find($id);
      
      return view('admin.pages.testFormUpdate', compact('allrecord'));
     
  
    }

     //Update Record
     public function updateForm(UpdateTest
      $request,TestInsertService $data) {

      $data->updateForm($request);

          return  redirect('admin/showrecord')->with('success', 'User updated successfully.');
     }

}