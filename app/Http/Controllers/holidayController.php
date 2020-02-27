<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_holidays;
class holidayController extends Controller
{
    public function holidaySaveUpdate(Request $request){
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
            'day_name'=>"required|max:60|regex:/^[a-zA-Z\s]+$/i",
           // 'date_holiday'=>'required|date_format:d/m/Y',
            'holiday_name'=>"required|max:100|regex:/^[a-zA-Z\s',]+$/i",
           
            ],
            [
             'day_name.required' => 'Enter day name',
             'day_name.regex' => 'Day name contains alphabatic characters only',
             'date_holiday.required' => 'Please enter date',
             'date_holiday.date_format' => 'The format is dd/mm/yyyy',
             'holiday_name.required'=>'Enter holiday name',
             'holiday_name.regex' => 'Holiday name contains alphabatic characters',
            ]);

        try{
        $id=$request->id;
        $saveHoliday = new tbl_holidays();
        $holiDate="25/02/2020";
        $saveHoliday->day_name = $request->day_name;
        $saveHoliday->holiday_date=  date('Y-m-d', strtotime(trim(str_replace('/', '-', $holiDate))));
        $saveHoliday->holiday_name = $request->holiday_name ;
      

        if(empty($request->id)){
            $saveHoliday=$saveHoliday->save();
            $status=1;
            
        }else{
            $saveHoliday = tbl_holidays::where('id',$id)->update(['day_name'=> $saveHoliday->day_name,'holiday_date'=>$saveHoliday->holiday_date,
            'holiday_name'=>$saveHoliday->holiday_name]);
            $status=2;
        }
     
     $response = array('status'=>$status);
        
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
public static function getHolidaydata(){
    $record=tbl_holidays::select('*')->get();
    return $record;
}

public function holidayEdit(Request $request){
    $statusCode = 200;
    $response = array();
    $this->validate($request, [
        'edit_code' => 'required|integer',
            ], [
        'edit_code.required' => 'Edit Code is required',
        'edit_code.integer' => 'Edit Code Accepted Only Integer',
    ]);
    try {
        $edit_code = $request->edit_code;
        if ($edit_code != 0) {
            $tbl_holidays = tbl_holidays::find($edit_code);
            $date=date('d/m/Y', strtotime(trim(str_replace('/', '-',  $tbl_holidays['holiday_date']))));;
            $status=1;
        } else {
            $tbl_holidays = array();
            $status=2;
        }
        $response=array('tbl_holidays'=>$tbl_holidays, 'date'=>$date,'status'=> $status);
    } catch (\Exception $e) {
        $response = array(
            'exception' => true,
            'exception_message' => $e->getMessage(),
        );
        $statusCode = 400;
    } finally {
        return response()->json($response, $statusCode);
    }
}

public function holidayDelete(Request $request){
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
        if(tbl_holidays::find($request->dlt_code)->delete()){
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
