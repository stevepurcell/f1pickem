@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header text-gray">
                    <div class="d-flex align-items-center">
                        <h2><i class="fa fa-trash-alt"></i> Deleted Tracks</h2>
                        <div class="ml-auto">
                            <a href="/admin/tracks" class="btn btn-lg btn-outline-dark">Back</a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">    
                    <table class="table table-striped table-font">
                        <thead>
                        <tr>
                          <th class="text-center" scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Created</th>
                          <th scope="col">Deleted</th>
                          <th colspan="2" scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($trashedTracks as $trashedTrack)
                        <div class="row">
                            <tr>
                                <td class="align-middle text-center">{{ $trashedTrack->id }}</td>
                                <td class="align-middle"><a href="{{ route('countries.show', $trashedTrack->id) }}">{{  $trashedTrack->name }}</a></td>
                                <td class="align-middle">{{ $trashedTrack->created_at->diffForHumans() }}</td>
                                <td class="align-middle">{{ $trashedTrack->deleted_at->diffForHumans() }}</td> 
                                <td width="5px">
                                    <form method="get" action="{{ route('tracks.restore', $trashedTrack->id) }}">
                                        <button type="submit" class="btn btn-lg btn-primary mr-1">
                                            Restore
                                        </button>
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                                <td width="5px">
                                    <form method="post" action="{{ route('tracks.permanent-delete', $trashedTrack->id) }}">
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-lg btn-danger pull-left">
                                            Delete
                                        </button>
                                        {{ csrf_field() }}
                                    </form>
                                </td>
                            </tr>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

