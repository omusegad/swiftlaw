<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Businessregistration;
use PDF;

class BusinessregistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessregistration = Businessregistration::all();
        return view('registerbusiness.index')->with('businessregistration', $businessregistration);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registerbusiness.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'proposed_name1' => 'required',
            'proposed_name2' => 'required',
            'proposed_name3' => 'required',
        ]);


        $businessregistration = new Businessregistration();

        $businessregistration->user_id = $request->user()->id;
        $businessregistration->doc_name = $request->get('doc_name');
        $businessregistration->proposed_name1 = $request->get('proposed_name1');
        $businessregistration->proposed_name2 =  $request->get('proposed_name2');
        $businessregistration->proposed_name3 =  $request->get('proposed_name3');
        $businessregistration->business_nature = $request->get('business_nature');
        $businessregistration->commencement_date =  $request->get('commencement_date');
        $businessregistration->plot_no_lr =  $request->get('plot_no_lr');
        $businessregistration->street_name =  $request->get('street_name');
        $businessregistration->postal_address =  $request->get('postal_address');
        $businessregistration->branch_address =  $request->get('branch_address');
        $businessregistration->telephone =  $request->get('telephone');
        $businessregistration->email =  $request->get('email');
        $businessregistration->proprietor_partner1 =  $request->get('proprietor_partner1');
        $businessregistration->proprietor_partner2 =  $request->get('proprietor_partner2');
        $businessregistration->proprietor_partner3 = $request->get('proprietor_partner3');
        $businessregistration->nationality_citizenship =  $request->get('nationality_citizenship');
        $businessregistration->nationality_origin =  $request->get('nationality_origin');
        $businessregistration->age =  $request->get('age');
        $businessregistration->gender =  $request->get('gender');
        $businessregistration->place_residence =  $request->get('place_residence');
        $businessregistration->other_business_occupation =  $request->get('other_business_occupation');
        $businessregistration->mobile_no =  $request->get('mobile_no');


        $businessregistration->save();
        

        return redirect('/business-registration/index')->with( 'business_message',  'Business Registration successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $businessdoc_details = Businessregistration::findOrfail($id);

        return view( 'registerbusiness.show')->with('businessdoc_details', $businessdoc_details);

      
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
        $editbusiness = Businessregistration::find($id);

        return view('businessregistration.edit', compact('editbusiness'));
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
