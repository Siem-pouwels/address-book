@extends('layouts.master')
@section('contents')
<div class="container-fluid">
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
            <th scope="col">Apply</th>
          </tr>
        </thead>
        <tbody> 
            <div class="row">
              <tr>
                  <form method="POST" action="/address/edit/{{$address->id}}">
                  @csrf
                    <td>{{$address->id}}</td>
                    <input type="hidden" name="id" value="{{$address->id}}">
                    <td><input type="text" name="first_name" value="{{$address->first_name}}" placeholder="First name"></td>
                    <td><input type="text" name="last_name" value="{{$address->last_name}}" placeholder="Last name"></td>
                    <td><input type="text" name="streetname" value="{{$address->streetname}}" placeholder="Street name"></td>
                    <td><input type="number" name="housenumber" value="{{$address->housenumber}}" placeholder="House number"></td>
                    <td><input type="text" name="postal_code" value="{{$address->postal_code}}" placeholder="Postal code"></td>
                    <td><input type="text" name="city_name" value="{{$address->city_name}}" placeholder="City name"></td>
                    <td><input type="text" name="tel_nmr" value="{{$address->tel_nmr}}" placeholder="Telephone number"></td>
                    <td><input type="text" name="email" value="{{$address->email}}" placeholder="Email"></td>
                    <td>{{$address->updated_at}}</td>
                    <td>{{$address->created_at}}</td>
                    <td>
                      <button class="btn btn-primary">
                        <span class="foo fa fa-star checked">Edit</span>
                      </button>
                    </td>
                  </form>
              </tr>
          </div>
        </tbody>
    </table>
  </div>
@endsection