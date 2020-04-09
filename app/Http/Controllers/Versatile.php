<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
Use App\VersatileModel;
Use App\versatileStudent;
Use App\versatileCartModel;

class Versatile extends Controller
{
    //Course Details Data Fetch
    public function courseDetail(){
     	 $code=$_REQUEST['code'];
     	 $data=VersatileModel::where('course_code',$code )->get();
     	 return view('course_detail',compact('data'));
     }

      public function courseDetail2(){
         $code=$_REQUEST['code'];
         session()->put('courseCode',$code);
         $data=VersatileModel::where('course_code',$code )->get();
         return view('students.course_detail',compact('data'));
     }  

   //Student Sign Up Form Details
    public function studentSign(Request $req){

     	 $userName=$req->userName;
         $userEmail=$req->userEmail;
         $userPhone=$req->userPhone;
         $userPassword=$req->userPassword;
     	 
     	 $data=versatileStudent::where('std_email',$userEmail)->count();
         if($data>0)
         {
         	echo "User Already Exist";
         }
         else
         {
         	$object=new versatileStudent(['std_name'=>$userName,'std_email'=>$userEmail,'std_phone'=>$userPhone,'std_password'=>$userPassword]);
         	$object->save();
         	return view('welcome');
         }       
      }


    //Student Login Details
    public function studentLogin(Request $req){

      	$userEmail=$req->userEmail;
      	$userPassword=$req->userPassword;
     	$data=versatileStudent::where('std_email',$userEmail)->get();

        foreach ($data as $d) {
        	$storeEmail=$d->std_email;
        	$storePassword=$d->std_password;
        	if($storeEmail==$userEmail && $storePassword==$userPassword)
             {
                session()->put('stdid',$d->id);
             	session()->put('stdName',$d->std_name);
             	session()->put('stdEmail',$d->std_email);
                session()->put('stdPhone',$d->std_phone);
             	return view('students.studentDeshboard');
             }
             else
             {
             	return view('welcome');
             }
        }
     } 

    //Insert Course In cart
    public function studentCart(Request $req){
         
         $courseCode=session()->get('courseCode');
         $stdId=session()->get('stdid');
         $userEmail=$req->cartEmail;
         $userPhone=$req->cartPhone;

         $courseTable=VersatileModel::where('course_code',$courseCode )->get();
         foreach ($courseTable as $ct) {
             $courseName=$ct->course_name;
             $courseTitle=$ct->course_title;
         }

         $data=versatileCartModel::where('std_email',$userEmail)->get();
         
         if($data->count()>0)
         {
           foreach ($data as $d) {
             $storeCourse=$d->cart_course_code;
             $storeEmail=$d->std_email;
         }
         if($storeCourse==$courseCode && $storeEmail==$userEmail)
         {
            echo "This email has been already taken course";
         }
         else
         {
            $object=new versatileCartModel(['cart_course_code'=>$courseCode,'cart_course_name'=>$courseName,'cart_course_title'=>$courseTitle,'std_id'=>$stdId,'std_email'=>$userEmail,'std_phone'=>$userPhone]);
            $object->save();
            return ('Successfully Register');
         } 
       }
       else
       {
         $object=new versatileCartModel(['cart_course_code'=>$courseCode,'cart_course_name'=>$courseName,'cart_course_title'=>$courseTitle,'std_id'=>$stdId,'std_email'=>$userEmail,'std_phone'=>$userPhone]);
            $object->save();
            return ('Successfully Register');
       }
    }
  
   //My Courses
    public function myCourse(){
         $stdEmail=session()->get('stdEmail');
         $cartTable=versatileCartModel::where('std_email',$stdEmail)->get();

         return view('students.mycourse',compact('cartTable'));      
     }     
}
 


