<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Image;
class UserController extends Controller
{
    public function employeeSaveUpdate(Request $request){
//dd($request->all());
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        $id="";
        if(isset($request->id)){
$id=$request->id;
        }
        $this->validate($request,[
            'user_name'=>"required|max:255|alpha_num|string",
            'email'=>'required|unique:users,email,'.$id.',id',
            'password'=>"required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/",
            'cpassword'=>"required|same:password",
            'first_name'=>"required|regex:/^[A-Za-z\s]+$/i",
            'last_name'=>"required|regex:/^[A-Za-z\s]+$/i",
            'mob_no'=>"required|digits:10",
            'gender'=>"required|max:1",
            'roll_type'=>"required|integer",
            //'joining_date'=>'required|date_format:d/m/Y',
            'employee_id'=>'required',
            'emp_department_type'=>"required|integer",
            'emp_facebook_link'=>"nullable|max:60|active_url",
            'emp_twitter_link'=>"nullable|max:60|active_url",
            'emp_linkedin_link'=>"nullable|max:60|active_url",
            ],
            [

             'user_name.required' => 'Enter user name',
             'user_name.alpha_num' => 'User name contains alphanumeric only',
             'user_name.string'=>'User name dont allow spaces',
             'email.required' => 'Enter email address',
          
             'password.required' => 'Enter password',
             'password.regex' => 'Password Atleast Contain Six characters, at least one uppercase letter, one lowercase letter, one number and one special character',
             'cpassword.required' => 'Enter confirm password',
             'cpassword.same'=>'password and confirm password are not same.',
             'first_name.required' => 'Enter first name',
             'first_name.regex'=>'First name contains only alphabatical charcters and scpaces only.',
             'last_name.required' => 'Enter last name',
             'last_name.regex'=>'First name contains only alphabatical charcters and scpaces only.',
             'mob_no.required' => 'Enter mobile number',
             'mob_no.digits' => 'Mobile number should be in 10 digits.',
             'gender.required' => 'Select your gender',
             'roll_type.required' => 'Select roll type',
             'emp_department_type.required' => 'Select department type',
             'emp_facebook_link.active_url'=>'Facebook link is not valid',
             'emp_twitter_link.active_url'=>'Twitter link is not valid',
             'emp_linkedin_link.active_url'=>'Linkedin link is not valid',

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
        //$joinDate=$request->joining_date;
        $joinDate="25/02/2020";
        $saveUser->joining_date=  date('Y-m-d', strtotime(trim(str_replace('/', '-', $joinDate))));;
        $saveUser->employee_id=$request->employee_id;
        if(!empty($request->id)){
            $det = User::where('id',$request->id)->first()->toArray();
            $fileName = $det['emp_image'];
            
        }
        else{
            $fileName="0";

        }
       
       
        $image = $request->up_image;
        //echo $image;die;
       
        if(!empty($request->file('up_image'))){
          
           // @unlink(public_path('user_image/'.$fileName));
           @unlink('public/user_image/'.$fileName);
          
            $image = $request->file('up_image');
            $extension =$image->getClientOriginalExtension(); // getting image extension
            $fileName = rand(111111111, 999999999) . '.' . $extension; // renamed image
            $image_path = "user_image";
            $image->move($image_path, $fileName);
        }
  
         $saveUser->emp_image = $fileName;
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


    public function employeeUsersDatatable(Request $request){
       
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
       
        $draw = $request->draw;
        $offset = $request->start;
        $length = $request->length;
        $search = $request->search ["value"];
        $order = $request->order;
       //print_r($order);die;
        $data = array();

            $userDetails = User::select('users.*')->where('roll_type', '1')->orderby('users.id', 'desc')->with('department_name')
                    ->where(function($q) use ($search) {
                $q->orwhere('user_name', 'like', '%' . $search . '%');
                $q->orwhere('mob_no', 'like', '%' . $search . '%');
                $q->orwhere('employee_id', 'like', '%' . $search . '%');
            });
        
 
        $record = $userDetails;
        $filtered_count = $userDetails->count();

        $page_displayed = $record->offset($offset)->limit($length)->get();
        $count = $offset + 1;
        foreach ($page_displayed as $forData) {
        //   echo"<pre>"; print_r($forData);die;
            $nestedData['id'] = $count;
            $nestedData['first_name'] = $forData->first_name." ".$forData->last_name;
            $nestedData['joining_date'] = date('d/m/Y', strtotime(trim(str_replace('-', '', $forData->joining_date))));
            $nestedData['employee_id'] = $forData->employee_id;
            $nestedData['mob_no'] = $forData->mob_no;
            $nestedData['dept_name'] = $forData['department_name']['dept_name'];
            
            $nestedData['action'] = '<button type="button" class="btn_action btn-warning edit-button" id="' . $forData->id . '" title="Edit"><i class="fa fa-edit"></i></button>&nbsp;';
            $nestedData['action'] .='<button type="button" class="btn_action btn-success delete-button" id="' . $forData->id . '" title="Delete"><i class="fa fa-trash"></i></button>';
            $count++;
            $data[] = $nestedData;
        }
        $response = array(
            "draw" => $draw,
            "recordsTotal" => $filtered_count,
            "recordsFiltered" => $filtered_count,
            'record_details' => $data
        );
        return response()->json($response);

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

    public function employeeUserDelete(Request $request){
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        $this->validate($request,[
            'dlt_code'=>"required|regex: /^[0-9]+$/",
            ],
            [

             'dlt_code.required' => 'Delete code is required',
             'dlt_code.regex' => 'Delete code should be integer',

            ]);

        try{
            if(User::find($request->dlt_code)->delete()){
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
