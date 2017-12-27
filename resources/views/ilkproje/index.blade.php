@extends('ilkproje.default_layout')

@section('title', 'giriş sayfası')
@section('metaDescription', 'sayfa description')
@section('metaKeywords', 'anahtar kelimeler ')

@section('main')
    <div class="anasayfa">
    <table class="table">


        <thead>
        <tr>
            <th> NAME</th>
            <th>ADDRESS</th>
            <th>PHONE</th>

        </tr>
        </thead>
        <tbody>
        @foreach($peopleArray as $person)
        <tr>
            <td>{{$person['name']}}</td>
            <td>{{$person['address']}}</td>
            <td>{{$person['phone']}}</td>

        </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection

@section('scripts')

@endsection

@section('css')
    <style>
    .anasayfa{
            min-height: 710px;
    }

    .table{
        width: 100%;
    }
    </style>

@endsection