<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class EntryController extends Controller
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert_patient(Request $req)

    {
    	$p_name= $req->input('p_name');
    	$p_age= $req->input('p_age');
    	$p_address= $req->input('p_address');
    	$p_city= $req->input('p_city');
    	$p_blood_group= $req->input('p_blood_group');
    	$p_fam_doc= $req->input('p_fam_doc');
    	$p_physical_status= $req->input('p_physical_status');
    	$p_mental_status= $req->input('p_mental_status');
    	
    	$p_phone= $req->input('p_phone');
    	$p_email= $req->input('p_email');
    	$p_password= $req->input('p_password');

    	$data = array('p_name' =>$p_name,'p_age' =>$p_age,'p_address' =>$p_address,'p_city' =>$p_city,'p_blood_group' =>$p_blood_group,'p_fam_doc' =>$p_fam_doc,'p_physical_status' =>$p_physical_status,'p_mental_status' =>$p_mental_status,'p_phone' =>$p_phone,'p_email' =>$p_email,'p_password' =>$p_password);

    	DB::table('patients_master')->insert($data);

    	echo "<script> alert('Submitted Successfully');</script>";

    	return view('welcome');
 
    }

































































































































     function insert_doctor(Request $req)
    {
    	$d_name = $req->input('d_name');
    	$d_address = $req->input('d_address');
    	$d_city = $req->input('d_city');
    	$d_specialisation = $req->input('d_specialisation');
    	$d_medipoints = $req->input('d_medipoints');
    	$d_phone = $req->input('d_phone');
    	$d_age = $req->input('d_age');
    	$d_email = $req->input('d_email');
    	$d_password = $req->input('d_password');
        $d_photo = $req->input('d_photo');

    	$data1=$arrayName = array('d_name' =>$d_name ,'d_address' =>$d_address , 'd_city' =>$d_city , 'd_specialisation' =>$d_specialisation , 'd_medipoints' =>$d_medipoints , 'd_phone' =>$d_phone , 'd_age' =>$d_age,'d_email' =>$d_email,'d_password' =>$d_password,'d_photo' =>$d_photo);

         DB::table('doctors_master')->insert($data1);

         echo "<script> alert('Submitted Successfully'); </script>";
         return view('welcome');
    } }
