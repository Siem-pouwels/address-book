@extends('layouts.master')
@section('contents')
<div class="container-fluid">
  <div class="container">
    <form action="/address/create" method="post">
      @csrf
      <input type="text" name="first_name" placeholder="First name">
      <input type="text" name="last_name"  placeholder="Last name">
      <input type="text"  name="streetname" placeholder="Street name">
      <input type="number"  name="housenumber" placeholder="3">
      <input type="text"  name="postal_code" placeholder="5845hm">
      <input type="text"  name="city_name" placeholder="City name">
      <input type="tel"  name="tel_nmr" placeholder="Telephone number">
      <input type="email" name="email" placeholder="Email">
      <button>
        <span class="btn btn-primary">Create</span>
      </button>
    </form>
  </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Streetname</th>
            <th scope="col">House.nr</th>
            <th scope="col">Postalcode</th>
            <th scope="col">City name</th>
            <th scope="col">Tel.nr</th>
            <th scope="col">Email</th>
            <th scope="col">Updated</th>
            <th scope="col">Created</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($addresses as $address)
                <tr>
                    <td>{{$address->id}}</td>
                    <td>{{$address->first_name}}</td>
                    <td>{{$address->last_name}}</td>
                    <td>{{$address->streetname}}</td>
                    <td>{{$address->housenumber}}</td>
                    <td>{{$address->postal_code}}</td>
                    <td>{{$address->city_name}}</td>
                    <td>{{$address->tel_nmr}}</td>
                    <td>{{$address->email}}</td>
                    <td>{{$address->updated_at}}</td>
                    <td>{{$address->created_at}}</td>
                    
                    <td>
                      <form action="/address/edit/{{ $address->id }}" method="get">
                        @csrf
                        <input type="hidden" name="id" value="{{ $address->id }}">
                        <button class="btn btn-primary">
                          <span class="foo fa fa-star checked">Edit</span>
                        </button>
                      </form>
                  </td>
              <td>
                <form action="/address/delete/{{ $address->id }}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{ $address->id }}">
                  <button class="btn btn-danger">
                    <span class="foo fa fa-star checked">Delete</span>
                  </button>
                </form>
              </td>
            @endforeach
        </tbody>
      </table>
</li>
</div>
@endsection