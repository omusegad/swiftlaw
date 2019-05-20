@extends('layouts.app')

     @section('content')
        <div class="row">
           <div class="col-12 text-center">
              <h2>Get Any Legal Document Easily</h2>
           </div>
           <div class="col-6">
               <h3>Personal</h3>
               <hr>
               <ul>
                   <li><a href=""><i class="fas fa-check-circle"></i>Property Sale Agreement</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Employment Contract</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Loan Agreement</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Demand Letter</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Nanny Employment Contract</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Car purchase Agreement</a> </li>
               </ul>
           </div>
           <div class="col-6">
               <h3>Business</h3>
               <hr>
                 <ul>
                     <a href="{{'business-registration/create' }}"> <i class="fas fa-check-circle"></i> {{'Business Name Registration'}}</a>
                    <li><a href=""><i class="fas fa-check-circle"></i>Private Limited Company</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Business Sale Agreement</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Joint Venture Agreement</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Sale Of Shares</a></li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Car Hire Agreement</a> </li>
                    <li><a href=""><i class="fas fa-check-circle"></i>Event Security Agreement</a> </li>
               </ul>
           </div>
        </div>
    @endsection
 
