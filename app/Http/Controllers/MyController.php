<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bank;
USE DB;
class MyController extends Controller
{
    
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
        $this->validate($request,[
            'adminid' => 'required | email'
        ],
    ['adminid.required' => 'admin id is required']);
    $this->validate($request,[
        'password' => 'required',
    ],
['password.required' => 'Enter your pawsword']);
    if('123456' != $request->password)
    {
        return back()->with('warning','invalid Password!');
     
    }
    else
    {
        return view('layout.admin');
      
     }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('layout.admin');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banks = new bank;
        $this->validate($request,[
            'fname' => 'required|regex:/^[\pL\s\-]+$/u|max:255'
        ],['fname.required' => 'first name and all the fields is required',
    'fname.regex' => 'first name is character not a digits ao special charcter'
    ]);
        $banks->fname = $request->fname;
        $this->validate($request,[
            'lname' => 'required |regex:/^[\pL\s\-]+$/u|max:255'
        ],['lname.required' => 'last name is required',
        'lname.regex' => 'last name is character not a digits ao special charcter'
        ]);
        $banks->lname  = $request ->lname;
        $this->validate($request,[
            'gender' => 'required'
        ],['gender.required' => 'Select gender']);
        $banks->gender  = $request ->gender;
        $this->validate($request,[
            'dob' => 'required'
        ],['dob.required' => 'customer must be equal or above 18 years']);
        $banks->dob  = $request ->dob;
        $this->validate($request,[
            'account' => 'required| digits:11 | unique:banks'],
            ['account.required' => 'dear admin provide an account number',
            'account.digits' => 'account number must be equal to 11 numeric digits',
            'account.unique'=>'The account number has already been taken.'
        ]);
        $banks->account  = $request ->account;
        $this->validate($request,[
            'debitcard' => 'required'
        ],['debitcard.required' => 'dear admin provide a visa card to the customer']);
        $banks->debitcard  = $request ->debitcard;
        $this->validate($request,[
            'balance' => 'required| numeric'
        ],['balance.required' => 'balance can be zero but not empty']);
        $banks->balance  = $request ->balance;
        $this->validate($request,[
            'cif' => 'required| digits:8 | unique:banks'
        ],['cif.required' => 'without cif number online banking is not possible',
            'cif.digits' => 'cif number must be numeric with 8 digits'
        ]);
        $banks->cif  = $request ->cif;
        $this->validate($request,[
            'ipin' => 'required|digits:6'
        ],['ipin.required' => 'provide ipin',
        'ipin.digits' => 'ipin must be numeric with 6 secure digits']);
        $banks->ipin  = $request ->ipin;
        
        $this->validate($request,[
            'email' => 'required | email | unique:banks'],
        ['email.unique' => 'dear admin email which you try to entering is already exist please choose another']);
        $banks->email  = $request ->email;
        $this->validate($request,[
            'mobile' => 'required | digits:10 | unique:banks'
        ],['mobile.digits' => 'mobile number must be numeric with 10 digits only']);
        $banks->mobile  = $request ->mobile;
    
        /*$banks->user_id=auth()->user()->id;*/
        $banks->save();
        
        return redirect('/admin')->with('success','Details saved succefully ');
        /*return view('layout.adminpage');*/
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id = trim($id,'bank');
        $obj= bank::find($id);
        return view('layout.profile')->with('bank',$obj);
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
