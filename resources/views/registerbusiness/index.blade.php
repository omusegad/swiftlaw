@extends('layouts.app')  
@section('content')
<div class="row">
    <div class="col-12">
      
    </div>
    <div class="col-12">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Document Name</th>
            <th scope="col">Business Name</th>
            <th scope="col">Business Name </th>
            <th scope="col">Business Name </th>
            <th scope="col">Nature of Business</th>
            <th scope="col">Commencement Date</th>
            <th scope="col">Plot No LR</th>
            <th scope="col">Street Address</th>
            <th scope="col">Postal Address</th>
            <th scope="col">Branch Address </th>
            <th scope="col">Telephone</th>
            <th scope="col">Email </th>
            <th scope="col">Proprietor Partner 1</th>
            <th scope="col">Proprietor Partner 2 </th>
            <th scope="col">Proprietor Partner 3</th>
            <th scope="col">Nationality </th>
            <th scope="col">Nationality Origin</th>
            <th scope="col">Gender </th>
            <th scope="col">Place Residence</th>
            <th scope="col">Other Business Occupation </th>
            <th scope="col">Mobile Phone</th>
            <th scope="col">Registration Status</th>
             <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
             @php($count=0)
            @foreach ($businessregistration as $registered)
                <tr>
                <td>{{ ++$count }}</td>
                <td>{{ $registered->doc_name }}</td>
                <td>{{ $registered->proposed_name1 }}</td>
                <td>{{ $registered->proposed_name2 }}</td>
                <td>{{ $registered->proposed_name3 }}</td>
                <td>{{ $registered->business_nature }}</td>
                <td>{{ $registered->commencement_date }}</td>
                <td>{{ $registered->plot_no_lr }}</td>
                <td>{{ $registered->street_name }}</td>
                <td>{{ $registered->postal_address }}</td>
                <td>{{ $registered->branch_address }}</td>
                <td>{{ $registered->telephone }}</td>
                <td>{{ $registered->email }}</td>
                <td>{{ $registered->proprietor_partner1 }}</td>
                <td>{{ $registered->proprietor_partner2 }}</td>
                <td>{{ $registered->proprietor_partner3 }}</td>
                <td>{{ $registered->nationality_citizenship }}</td>
                <td>{{ $registered->nationality_origin }}</td>
                <td>{{ $registered->gender }}</td>
                <td>{{ $registered->place_residence }}</td>
                <td>{{ $registered->other_business_occupation }}</td>
                <td>{{ $registered->mobile_no }}</td>
                <td>{{ $registered->document_status }}</td>
                <td><a href="{{ url('business-registration/'.$registered->id) }}"><i class="fas fa-eye"></i></a></td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
@endsection('content')