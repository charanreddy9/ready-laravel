<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\insert;


class InsertController extends Controller
{
      public $successStatus = 200;
     
    public function store(Request $request)
    {
   
    $this->validate($request,['username'=>'required','email'=>'required','password'=>'required','mobile'=>'required','games'=>'required','intrest'=>'','gender'=>'required','date'=>'required','range'=>'required','textarea'=>'required','latitude'=>'required','longitude'=>'required','longitude'=>'required']);  
    $insert=insert::create($request->all());
	
	   if ($request->has('uploadimage')) {
        $base64=$request->uploadimage;
        $edit=str_after($base64,'data:image/png;base64,');
        $data = base64_decode($edit);
        $randomString = str_random(25);
        $path = public_path('').'/images/'. "$randomString " .'.png';
        file_put_contents($path, $data);
        $insert->uploadimage= $path;
        $insert->update([]);
            
      } 
	   if ($request->has('voicerecord')) {
        $base64=$request->voicerecord;
        $edit=str_after($base64,'data:audio/mp3;base64,');
        $data = base64_decode($edit);
        $randomString = str_random(25);
        $path = public_path('').'/audio/'. "$randomString " .'.mp3';
        file_put_contents($path, $data);
        $insert->voicerecord= $path;
        $insert->update([]);
            
      } 
	   if ($request->has('videodata')) {
        $base64=$request->videodata;
        $edit=str_after($base64,'data:video/mp4;base64,');
        $data = base64_decode($edit);
        $randomString = str_random(25);
        $path = public_path('').'/video/'. "$randomString " .'.mp4';
        file_put_contents($path, $data);
        $insert->videodata= $path;
        $insert->update([]);
            
      } 
    return response()->json(['insert'=>$insert], $this->successStatus);
    
    }
	 public function show(Request $request)
    {
        
        $result = insert::all();
        
        return response()->json(['result' => $result], $this->successStatus);

    }

    public function update($id,Request $request)
    {
      $insert = insert::find($id);
      $insert->username =$request->input('username');
	  $insert->mobile =$request->input('mobile');
	  $insert->email =$request->input('email');
      $insert->save();
	 
	  return response()->json(['result' => $insert], $this->successStatus);
    }
	public function getrecord($id,Request $request)
    {
      $insert = insert::find($id);
      
	 
	  return response()->json(['result' => $insert], $this->successStatus);
    }
	 public function delete($id,Request $request)
    {
		$insert = insert::find($id);
		$insert->delete();
	}
}
