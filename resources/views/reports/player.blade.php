@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 mt-4">
      <div class="card">
          <div class="card-header text-gray">
            <div class="d-flex align-items-center">
                <h2><i class="fa fa-flag-checkered" aria-hidden="true"></i>
                  {{ getUserName($user_id) }} Results
                </h2>
            </div>
        </div>
          <div class="card-body text-secondary">
      <table class="table table-striped table-font">
        <thead>
          <tr>
            <th scope="col">Race Name</th>
            <th scope="col">Points</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($results as $result)
          <tr>
            <td class="align-middle">{{ $result['name'] }}</a></td>
            <td class="align-middle">{{ $result['points'] }}</td>
        </td>
          </tr>
        @endforeach
        <tr>
            <td class="align-right"><strong>Total</strong></td>
            <td>{{ getPlayerPtsTotal($user_id) }}</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
  </div>
</div>
@endsection
