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
            @foreach ($addresses as $address)
                <tr>
                    <td>{{$address->id}}</td>
                    <td>{{$address->first_name}}</td>
                    <td>{{$address->last_name}}</td>
                    <td>{{$address->tel_nmr}}</td>
                    <td>{{$address->streetname}}</td>
                    <td>{{$address->housenumber}}</td>
                    <td>{{$address->date_of_birth}}</td>
                    <td>{{$address->created_at}}</td>
                    <td>{{$address->updated_at}}</td>
                    <a href="/address/edit/{{$address->id}}">Edit</a>
                    <form action="/address/delete/{{ $address->id }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{ $address->id }}">
                      <button>
                        <span class="foo fa fa-star checked"></span>
                      </button>
                    </form>
            @endforeach
        </tbody>
      </table>
</li>
@endsection