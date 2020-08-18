@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 mt-4">
      <div class="card">
          <div class="card-header text-gray">
            <div class="d-flex align-items-center">
                <h2><i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  {{ getConstructorName($constructor_id) }} Season Points
                </h2>
            </div>
        </div>
          <div class="card-body text-secondary">
      <table class="table table-striped table-font">
        <thead>
          <tr>
            <th scope="col">Position</th>
            <th scope="col">Driver</th>
            <th scope="col">Finish</th>
            <th scope="col">Points</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($results as $result)
          <tr>
            <td class="align-middle">{{ $result->race_id }}</a></td>
            <td class="align-middle">{{ $result->race->name }}</a></td>
            <td class="align-middle">{{  $result->position }}</td>
            <td class="align-middle">{{ calcPoints($result->position) }}</a></td>
        </td>
          </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td class="align-right">Total</td>
            <td>{{ returnPoints($driver_id) }}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
  </div>
</div>
@endsection
