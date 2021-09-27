@extends('layouts.master')
@section('contents')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Tel.nr</th>
            <th scope="col">Streetname</th>
            <th scope="col">House.nr</th>
            <th scope="col">Birth date</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody> 
            <tr>
                <form method="POST" action="/address/edit/{{$data->id}}">
                @csrf
                <td>{{$data->id}}</td>
                <td>{{$data->first_name}}</td>
                <td>{{$data->last_name}}</td>
                <td>{{$data->tel_nmr}}</td>
                <td>{{$data->streetname}}</td>
                <td>{{$data->housenumber}}</td>
                <td>{{$data->date_of_birth}}</td>
                </form>
                <form action="/address/delete/{{ $data->id }}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{ $data->id }}">
                  <button>
                    <span class="foo fa fa-star checked"></span>
                  </button>
                </form>
@endsection