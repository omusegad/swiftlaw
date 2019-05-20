@extends('layouts.app')   

@section('content')
<div class="row">
  <div class="col-12">    
    <h4>@section('title', 'Busness Registration')</h4>
 </div>
<div class="col-9 docbx">
       <div class="text-black">
         <h5>(i)Get your Business Name Registered for 3,000/= Pay via M-PESA TILL NO. 778721 and fill in below details.</h5>
       </div>
    {{ Form::open(['method'=>'POST','url' => 'business-registration','files'=>'true']) }}
   
     @csrf
   
    <div class="form-group">
    {{ Form::label('proposed_name1', '(a) Proposed Name(s) of the Business should be at least three (3)', array('class' => ''))}}
    {{ Form::text('proposed_name1', '', array('class' => 'form-control','placeholder'=>'Name'))}}
    @error('proposed_name1')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   </div>
    <div class="form-group">
     {{ Form::text('proposed_name2', '', array('class' => 'form-control','placeholder'=>'Name'))}}
       @error('proposed_name2')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
   </div>
    <div class="form-group">
     {{ Form::text('proposed_name3', '', array('class' => 'form-control','placeholder'=>'Name'))}}
       @error('proposed_name3')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     </div>
    <div class="form-group">
    {{ Form::label('business_nature', '(b) Nature of the business.', array('class' => ''))}}
     {{ Form::text('business_nature', '', array('class' => 'form-control','placeholder'=>'Nature of business'))}}
       @error('business_nature')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     </div>
     <div class="form-group">
     {{ Form::label('commencement_date', '(c) Date of commencement.', array('class' => ''))}}
     {{ Form::date('commencement_date', '', array('class' => 'form-control'))}}
       @error('commencement_date')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     </div>
     <div class="text-black">
       <h5>(ii) Address of the principal place of business</h5>
     </div>
     <div class="form-group">
     {{ Form::label('plot_no_lr', '(a) Plot No, LR.', array('class' => ''))}}
     {{ Form::text('plot_no_lr', '', array('class' => 'form-control','placeholder'=>'Plot No LR'))}}
       @error('plot_no_lr')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     </div>
     <div class="form-group">
      {{ Form::label('street_name', '(b) Section or the name of the Street or Road', array('class' => ''))}}
     {{ Form::text('street_name', '', array('class' => 'form-control','placeholder'=>'Name of the street'))}}
       @error('plot_no_lr')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
     </div>
     <div class="form-group">
     {{ Form::label('postal_address', '(c) Postal address.', array('class' => ''))}}
     {{ Form::text('postal_address', '', array('class' => 'form-control','placeholder'=>'Postal Address'))}}
      @error('plot_no_lr')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
     <div class="form-group">
    {{ Form::label('branch_address', '(d) Address of any other place of Business E.g. Branch Office.', array('class' => ''))}}
     {{ Form::text('branch_address', '', array('class' => 'form-control','placeholder'=>'Branch Address'))}}
      @error('branch_address')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
     <div class="form-group">
     {{ Form::text('telephone', '', array('class' => 'form-control','placeholder'=>'Telephone'))}}
      @error('telephone')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
      <div class="form-group">
      {{ Form::label('email', 'Applicant must have a registered email for the business that is not their personal email.', array('class' => ''))}}
      {{ Form::text('email', '', array('class' => 'form-control','placeholder'=>'Email'))}}
       @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
     <div class="text-black">
       <h5>(iii) Particulars of proprietor/partners and provide the function for adding if the Business has more than one Proprietor/Partner.</h5>
     </div>
     
      <div class="form-group">
        {{ Form::label('proprietor_partner1', '(a) Full name and former names if any, if married woman, full name of husband.', array('class' => ''))}}
     {{ Form::text('proprietor_partner1', '', array('class' => 'form-control','placeholder'=>'Partner Name'))}}
      @error('proprietor_partner1')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>

      <div class="form-group">
     {{ Form::text('proprietor_partner2', '', array('class' => 'form-control','placeholder'=>'Partner Name'))}}
      @error('proprietor_partner2')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
     </div>
      <div class="form-group">
      {{ Form::text('proprietor_partner3', '', array('class' => 'form-control','placeholder'=>'Partner Name'))}}
       @error('proprietor_partner3')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
       <div class="form-group">
      {{ Form::label('nationality_citizenship', '(b) Nationality & Citizenship', array('class' => ''))}}
      {{ Form::text('nationality_citizenship', '', array('class' => 'form-control','placeholder'=>'Nationality or Citizenship'))}}
        @error('nationality_citizenship')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      </div>
       <div class="form-group">
      {{ Form::label('nationality_origin', '(c) Nationality of Origin', array('class' => ''))}}
      {{ Form::text('nationality_origin', '', array('class' => 'form-control','placeholder'=>'Nationality of origin'))}}
        @error('nationality_origin')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
       <div class="form-group">
      {{ Form::label('age', '(d) Age', array('class' => ''))}}
      {{ Form::text('age', '', array('class' => 'form-control','placeholder'=>'Age'))}}
        @error('age')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
       <div class="form-group">
         {{ Form::label('gender', '(d) gender', array('class' => ''))}}
         {{ Form::select('gender', array('male' => 'Male','female' => 'Female'), 'key', array('class' => 'form-control'))}}
          @error('gender')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
       <div class="form-group">
       {{ Form::label('place_residence', '(f) Residential Place', array('class' => ''))}}
       {{ Form::text('place_residence', '', array('class' => 'form-control','placeholder'=>'Residential Place'))}}
        @error('place_residence')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
       {{ Form::label('other_business_occupation', '(g)Other Business Occupation', array('class' => ''))}}
       {{ Form::text('other_business_occupation', '', array('class' => 'form-control','placeholder'=>'Other Business Occupation'))}}
        @error('other_business_occupation')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
       <div class="form-group">
       {{ Form::label('mobile_no', '(h)Mobile Number', array('class' => ''))}}
       {{ Form::text('mobile_no', '', array('class' => 'form-control','placeholder'=>'Residential Place'))}}
        @error('mobile_no')
         <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
       {{ Form::label('businesdocs', '(h)Statutory documents, Copy of I.D, Copy of KRA PIN,Certificate/qualification/license', array('class' => ''))}}
       {{ Form::file('name', array('class' => 'name'))}}
      </div>
       
      
    <div class="form-group">
      {{ Form::submit('Submit', array('class' => 'form-control btn btn-primary')) }}
     </div>
   {{ Form::close() }}
</div>
</div>

@endsection