@extends('ilkproje.default_layout')

@section('title', 'next page')
@section('metaDescription', 'next page description')
@section('metaKeywords', 'anahtar kelimeler #2 ')

@section('main')


    <div class="anasayfa">
    <h3>{{$number}} URL Generated</h3>
    @foreach($urlArray as $url)
        {{$url}} <br>
    @endforeach
    </div>

@endsection

@section('scripts')

@endsection

@section('css')
    <style>
        .anasayfa{
            min-height: 710px;
        }

    </style>

@endsection