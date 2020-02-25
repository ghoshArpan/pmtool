<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function employeeSaveUpdate(Request $request){

        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }

        $this->validate($request,[
            'user_name'=>"required",
            'email'=>"required",
            'password'=>"required",
            'cpassword'=>"required",
            'first_name'=>"required",
            'last_name'=>"required",
            'mob_no'=>"required",
            'gender'=>"required",
            'roll_type'=>"required",
            'emp_department_type'=>"required",
            // 'emp_facebook_link'=>"required",
            // 'emp_twitter_link'=>"required",
            // 'emp_linkedin_link'=>"required",
            ],
            [

             'user_name.required' => 'Enter User Name',
             'email.required' => 'Enter Email Address',
             'password.required' => 'Enter Password',
             'cpassword.required' => 'Enter Confirm Password',
             'first_name.required' => 'Enter First Name',
             'last_name.required' => 'Enter Last Name',
             'mob_no.required' => 'Enter Mobile Number',
             'gender.required' => 'Select Gender',
             'roll_type.required' => 'Select Roll Type',
             'emp_department_type.required' => 'Select Department Type',

            ]);

        try{
        if(isset($request->id)){
            $saveUser = User::find($request->id);
        }else{
            $saveUser = new User();

        }

        $saveUser->user_name = $request->user_name;
        $saveUser->email  = $request->email ;
        $saveUser->password = bcrypt($request->password);
        $saveUser->first_name = $request->first_name;
        $saveUser->last_name = $request->last_name;
        $saveUser->mob_no = $request->mob_no;
        $saveUser->gender = $request->gender;
        $saveUser->roll_type = $request->roll_type;
        $saveUser->emp_department_type = $request->emp_department_type;
        // $saveUser->emp_image = $request->emp_image;
        $saveUser->emp_facebook_link = $request->emp_facebook_link;
        $saveUser->emp_twitter_link = $request->emp_twitter_link;
        $saveUser->emp_linkedin_link = $request->emp_linkedin_link;

        if($saveUser->save()){
            $response = ['status'=>1];
        }else{
            $response = ['status'=>0];
        }
    }
    catch(\Exception $e){
        $response = array(
            'exception' => true,
            'exception_message' => $e->getMessage(),
        );
        $statuscode=400;
     } finally{
       return response()->json($response, $statusCode);
    }


    }


    public function employeeDatatable(Request $request){
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        try{

        }
        catch(\Exception $e){
            $response = array(
                'exception' => true,
                'exception_message' => $e->getMessage(),
            );
            $statuscode=400;
         } finally{
           return response()->json($response, $statusCode);
        }

    }


    public function employeeEditData(Request $request){

        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }

        $this->validate($request,[
            'id'=>"required|regex: /^[0-9]+$/",
            ],
            [

             'id.required' => 'Choose Correct Option',
             'id.regex' => 'Choose Correct Option',

            ]);

        try{
        $userData = User::find($request->id);

        if($userData){
            $response = ['data'=>$userData, 'status'=>1];
        }else{
            $response = ['status'=>0];
        }
    }
    catch(\Exception $e){
        $response = array(
            'exception' => true,
            'exception_message' => $e->getMessage(),
        );
        $statuscode=400;
     } finally{
       return response()->json($response, $statusCode);
    }

    }

    public function employeeDelete(Request $request){
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        $this->validate($request,[
            'id'=>"required|regex: /^[0-9]+$/",
            ],
            [

             'id.required' => 'Choose Correct Option',
             'id.regex' => 'Choose Correct Option',

            ]);

        try{
            if(User::find($request->id)->delete()){
                $response = ['status'=>1];
            }else{
                $response = ['status'=>0];
            }
        }
        catch(\Exception $e){
            $response = array(
                'exception' => true,
                'exception_message' => $e->getMessage(),
            );
            $statuscode=400;
        } finally{
        return response()->json($response, $statusCode);
        }
    }
}
