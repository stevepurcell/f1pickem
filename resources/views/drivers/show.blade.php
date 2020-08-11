@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12 mt-4">
          <div class="card">
              <div class="card-header text-gray">
                    <div class="d-flex align-items-center">
                        <h2>{{ $constructor->name }}</h2>
                    </div>
              </div>
    <div class="card-body text-secondary">
        <table>
            <tr>
                <td><h2>Country:</h2></td>
                <td><h2>{{ $constructor->country->name }}  <span class="flag-icon flag-icon-{{ $constructor->country->flag }}"></span></h2><td>
            </tr>
            <tr>
                <td><h2>Team Chief:</h2></td>
                <td><h2>{{ $constructor->teamchief }}</h2><td>
            </tr>
            <tr>
                <td><h2>Technical Chief:&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
                <td><h2>{{ $constructor->technicalchief }}</h2><td>
            </tr>
            <tr>
                <td><h2>Chassis:</h2></td>
                <td><h2>{{ $constructor->chassis }}</h2><td>
            </tr>
            <tr>
                <td><h2>Power Unit:</h2></td>
                <td><h2>{{ $constructor->powerunit }}</h2><td>
            </tr>
            <tr>
                <td><a href="/admin/constructors/{{ $constructor->id }}/edit" class="btn btn-lg btn-success">Edit</a>
                    <a href="/admin/constructors" class="btn btn-lg btn-primary">Back</a>
                </td>
                <td></td>
            </tr>
            
        </table>

    </div>
  </div>
</div>
@endsection