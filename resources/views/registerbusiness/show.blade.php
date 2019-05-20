
@extends('layouts.app')  
@section('content')
<div class="row">
    <div class="col-12">
      
    </div>
    <div class="col-12">
        <table class="table">
        <thead>
          
        </thead>
        <tbody>
                <tr>
                <td>{{ $businessdoc_details->doc_name }}</td>
                </tr>
                <td>{{ $businessdoc_details->proposed_name1 }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->proposed_name2 }}</td>
                </tr>
                <tr>
                <td>{{ $businessdoc_details->proposed_name3 }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->business_nature }}</td>
                  <tr>
                <td>{{ $businessdoc_details->commencement_date }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->plot_no_lr }}</td>
                 </tr>
                 <tr>
                <td>{{ $businessdoc_details->street_name }}</td>
                  <tr>
                <td>{{ $businessdoc_details->postal_address }}</td>
                 </tr>
                 <tr>
                <td>{{ $businessdoc_details->branch_address }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->telephone }}</td>
                 </tr>
                 <tr>
                <td>{{ $businessdoc_details->email }}</td>
                 </tr>
                  <tr>
                <td>{{ $businessdoc_details->proprietor_partner1 }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->proprietor_partner2 }}</td>
                 </tr>
                  <tr>
                <td>{{ $businessdoc_details->proprietor_partner3 }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->nationality_citizenship }}</td>
                 </tr>
                  <tr>
                <td>{{ $businessdoc_details->nationality_origin }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->gender }}</td>
                 </tr>
                  <tr>
                <td>{{ $businessdoc_details->place_residence }}</td>
                  </tr>
                <td>{{ $businessdoc_details->other_business_occupation }}</td>
                 </tr>
                  <tr>
                  <td>{{ $businessdoc_details->mobile_no }}</td>
                 </tr>
                <tr>
                <td>{{ $businessdoc_details->document_status }}</td>
                </tr>
                <tr>
                  <td> <td><a href="{{ url('business-registration/edit/'.$businessdoc_details->id) }}"> <i class="fas fa-eye"></i> </a> </td></td>
                </tr>
        </tbody>
        </table>
    </div>
</div>
@endsection('content')