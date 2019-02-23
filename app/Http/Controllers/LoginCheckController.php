<?php



namespace App\Http\Controllers;

use App\Doctor;
use App\Patients;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class LoginCheckController extends Controller
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     function login_check(Request $req)

    {

    	

    	$login_type= $req->input('login_type');

    	$email= $req->input('email');
    	$password= $req->input('passwd');

    	if ($login_type == 'doctor'){
    		$doctor_array = Doctor::select('d_id')->
    		where('d_email',$email)->
    		where('d_password',$password)->
    		get();
    		if ($doctor_array == null) {
echo "<script>alert('Please Enter Valid Credentials');</script>";
    			return view('login_page');

    		}
    		else{
    			

    			    		$d_id_arr = $doctor_array[0];
    		$d_id = $d_id_arr['d_id'];

    		return view('doctor_portal')->with('d_id', $d_id);
    		}
    		
    		
    	}

    	if ($login_type == 'patient'){
    		$patient_array = Patients::select('p_id')->
    		where('p_email',$email)->
    		where('p_password',$password)->
    		get();
    		if ($patient_array == null) {
    				echo "<script>alert('Please Enter Valid Credentials');</script>";
    			return view('login_page');
    		}
    		else{
    			

    			    		$p_id_arr = $patient_array[0];
    		$p_id = $p_id_arr['d_id'];

    		return view('patient_portal')->with('p_id', $p_id);

    		}
    		
    		
    	}
}
}