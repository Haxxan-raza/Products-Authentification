<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\AdminData;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;
use App\Facades\TestFacade;
use Exception;


class TestFormHelperClass
{
   
    //insert Image
    public function saveImage($image) {
 try{    
        $profilePhoto =  '';
        if(empty($image)) {
            $profilePhoto =  '';
        } else {
            $destinationPath = public_path().'/images/' ;
            $fileName = time().'.'.$image->clientExtension();
            $image->move($destinationPath, $fileName);
            $profilePhoto = $fileName;
        }
        return $profilePhoto;
    } catch(Exception $e) {
      dd($e->getMessage());       
      }
  
   }
    //Update Image
    
    public function updateImage($image) {
 try{ 
        $profilePhoto =  '';
        if(empty($image)) {
            $profilePhoto =  '';
        } else {
            $destinationPath = public_path().'/images/' ;
            $fileName = time().'.'.$image->clientExtension();
            $image->move($destinationPath, $fileName);
            $profilePhoto = $fileName;
        }
        return $profilePhoto;
    } catch (Exception $e) {
        dd($e->getMessage());
         }
        
}
        
    

}