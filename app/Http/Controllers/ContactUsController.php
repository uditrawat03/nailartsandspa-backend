<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use App\Models\ContactUs;
use Validator;
use Response;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        die('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        die('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
         $validator = Validator::make($request->all(), [
            'name'          => 'required|max:255',
            'subject'       => 'required|max:255',
            'email_id'      =>'required|email',
            'description'   =>'required'

        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }        
        
        try{
            $contactus              = new ContactUs();
            $contactus->name        = $request->input('name');
            $contactus->email_id    = $request->input('email_id');
            $contactus->subject     = $request->input('subject');
            $contactus->description = $request->input('description');
            $status = false;
            $message = "System Error, Please try after some time!";
            if( $contactus->save() ){
                $status  = true;
                $message = "Your detail has been saved successfully, Administrator team will contact soon!";
            }
            return response()->json(array(
                'status'  => $status,
                'message' => $message
            ), 200);

        } catch( Exception $exception ) {
            return response()->json(array(
                'status'  => false,
                'message' => $exception->getMessage()
            ), 400);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
