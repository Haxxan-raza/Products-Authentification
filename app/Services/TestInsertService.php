<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use App\Models\AdminData;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\file;
use App\Http\Requests\UpdateTest;
use App\Facades\TestFacade as Helpers;
use App\Http\Controllers\admin\TestProjectController;


class TestInsertService
{

  protected $user;

  public function __construct()
    {
        $this->user = Auth::user()->id;
    }




  //add Image
    public function storeForm( $request) {
      
 try{
      $image= Helpers::saveImage($request->image);
     $admins= AdminData::with('users')->create([
        'user_id'=>$this->user,
          'name' => $request->name,
          'image' => $image
        ]);
        return redirect()->back();
    } catch(Exception $e) {
        dd($e->getMessage());
        }
      }

    //Image Save Update
    public function updateForm(Request $request) {
 try{ 
      $data=AdminData::with('users')->find($request->id);
        // global $imagePath;
        if(empty($image)) {
          $image= Helpers::updateImage($request->image , $data->image);
          $data->update([
            'user_id' => $this->user,
            'name' => $request->name,
            'image' => $request->hasFile('image') ? $image : $data->image
                ]);
        } else {
             $imagePath =  public_path().'/images/'.$data->image;
            if(File::exists($imagePath)) {
                File::delete($imagePath);
                    }  
                  return redirect()->back();
                }

    } catch(Exception $e) {
       dd($e->getMessage()); 
       }
      } 


      public function storeData($request) {
        try{
          $image= Helpers::saveImage($request->image);
         $admins= Product::with('users')->create([
            'user_id'=>$this->user,
              'dresses' => $request->dresses,
              'shoes' => $request->shoes,
              'accessories' => $request->accessories,
              'image' => $image
            ]);
            return redirect()->back();
        } catch(Exception $e) {
            dd($e->getMessage());
            }
      }
}
