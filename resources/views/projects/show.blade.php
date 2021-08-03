@extends('layout.app')

@section('content')

        </nav>
    <div class="row">
        <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2>  {{ $project->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-arrow-left "></i> </a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $project->name }}
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Accomplishment:</strong>
                {{ $project->accomplishment }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rating:</strong>
                {{ $project->ranking }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Remarks:</strong>
                {{ $project->remarks }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($project->created_at, 'jS M Y') }}
            </div>
        </div>

   

    </div>
    @endsection

<!--
         <table class="table">
            <thead class="thead-dark">

    <div class="row">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Acoomplishment</th>
            <th scope="col">Rating</th>
            <th scope="col">Remarks</th>
            <th scope="col">Date</th>

        </tr>
        <tbody>
            <tr>
            <td>{{ $project->name }}</td>
            <td>{{ $project->accomplishment }}</td>
            <td>{{ $project->ranking }}</td>
            <td> {{ $project->remarks }}</td>
            <td>{{ date_format($project->created_at, 'jS M Y') }}</td>
            </tr>
            
        </tbody>
        </table>

       -->             
        
   

  

           
