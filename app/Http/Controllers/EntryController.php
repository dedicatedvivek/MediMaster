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

    	$data = array('p_name' =>$p_name,'p_age' =>$p_age,'p_address' =>$p_address,'p_city' =>$p_city,'p_blood_group' =>$p_blood_group,'p_fam_doc' =>$p_fam_doc,'p_physical_status' =>$p_physical_status,'p_mental_status' =>$p_mental_status,'p_phone' =>$p_phone,'p_email' =>$p_email);

    	DB::table('patients_master')->insert($data);

    	echo "<script> alert('Submitted Successfully');</script>";

    	return view('welcome');
 
    }

































































































































    // Doctor's Code
}
