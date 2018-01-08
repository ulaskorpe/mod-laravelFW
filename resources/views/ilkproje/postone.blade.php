@extends('ilkproje.default_layout')

@section('title', 'next page')
@section('metaDescription', 'next page description')
@section('metaKeywords', 'anahtar kelimeler #2 ')

@section('main')


    <div class="anasayfa">
        <div class="container">
        <div class="panel-heading"> </div>
            <div class="panel-body">
            <form class="form-horizontal" role="form" id="post_one" action="{{Route('postOne')}}"
                  method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="ui padded grid">
                    <label for="" class="two wide column">Name Surname : </label>
                    <div class="fourteen wide column ui input"><input type="text" name="name_surname" id="name_surname" class="ui input"></div>

                </div>
                <div class="ui padded grid">
                    <label for="" class="two wide column">Address : </label>
                    <div class="fourteen wide column ui input"><input type="text" name="address" id="address" class="ui input"></div>

                </div>
                <div class="ui padded grid">
                    <label for="" class="two wide column">Phone : </label>
                    <div class="fourteen wide column ui input"><input type="text" name="phone" id="phone" class="ui input"></div>

                </div>
                <div class="ui padded grid">
                    <label for="" class="two wide column"> </label>
                    <div class="fourteen wide column ui input"> <input type="submit" value="POST" class="ui primary button"></div>

                </div>

            </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


    <script>


    </script>

@endsection

@section('css')
    <style>

        input{
            width: 200px;
        }
        .anasayfa {
            min-height: 710px;
        }

    </style>

@endsection