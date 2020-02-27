<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\tbl_departments;
use App\tbl_leave_types;
use App\tbl_employee_leave;

class leaveController extends Controller
{

    public function leavesDatatable(Request $request)
    {
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }

        $draw = $request->draw;
        $offset = $request->start;
        $length = $request->length;
        $search = $request->search["value"];
        $order = $request->order;
        $data = array();
        $leaveDetails = tbl_employee_leave::select('tbl_employee_leaves.*')->orderby('tbl_employee_leaves.id', 'desc')->with('employee_details')->with('leave_name')
            ->where(function ($q) use ($search) {
                $q->orwhere('reason', 'like', '%' . $search . '%');
            });
        $record = $leaveDetails;
        $filtered_count = $leaveDetails->count();
        $page_displayed = $record->offset($offset)->limit($length)->get();
        $count = $offset + 1;
        foreach ($page_displayed as $forData) {
            $nestedData['id'] = $count;
            $nestedData['date'] = "From:-" . date('d/m/Y', strtotime(trim(str_replace('-', '', $forData->from_date)))) . " To:- " . date('d/m/Y', strtotime(trim(str_replace('-', '', $forData->to_date))));
            $nestedData['first_name'] = $forData['employee_details']['first_name'] . " " . $forData['employee_details']['last_name'];
            $nestedData['employee_id'] = $forData['employee_details']['employee_id'];
            $nestedData['leave_type'] = $forData['leave_name']['leave_type_name'];
            $nestedData['reason'] = $forData->reason;
            if ($forData->app_disapp_status == 0) {
                $nestedData['action'] = '<button type="button" class="btn_action btn-warning approve-button" id="' . $forData->id . '" title="Click to approve"><i class="fa fa-toggle-off"></i></button>&nbsp;';
            } else {
                $nestedData['action'] = '<span style="color:blue; font-size:15px; font-weight:bold">Leave Approved</span>';
            }
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

    public function leaveStatusChanged(Request $request){
        $statusCode = 200;
        if (!$request->ajax()) {
            $statusCode = 400;
            $response = array('error' => 'Error occured in form submit.');
            return response()->json($response, $statusCode);
        }
        $this->validate(
            $request,
            [
                'approve_code' => "required|regex: /^[0-9]+$/",
            ],
            [

                'approve_code.required' => 'Approve code is required',
                'approve_code.regex' => 'Approve code should be integer',

            ]
        );

        try {
            $approve_code=$request->approve_code;
           $tbl_employee_leave=tbl_employee_leave::where('id',$approve_code)->update([
               'app_disapp_status'=>'1'
           ]);
           $response=array('status'=>1);
    } catch (\Exception $e) {
            $response = array(
                'exception' => true,
                'exception_message' => $e->getMessage(),
            );
            $statuscode = 400;
        } finally {
            return response()->json($response, $statusCode);
        }
    }
}
