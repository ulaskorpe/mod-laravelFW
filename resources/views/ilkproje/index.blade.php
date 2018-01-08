@extends('ilkproje.default_layout')

@section('title', 'giriş sayfası')
@section('metaDescription', 'sayfa description')
@section('metaKeywords', 'anahtar kelimeler ')

@section('main')
    <div class="anasayfa">
        <div class="container">

            <div class="row" style="margin-top: 40px;">
                <div class="col-md-9">


                    <h4 class="card-title">{{__('personnel.personnel_list')}}</h4>

                </div>

                <div class="col-md-3">

                    <button type="button" class="btn btn-primary" onclick="createPersonnel();" style="cursor: pointer;">
                        Create Personnel
                    </button>


                </div>

            </div>
        <div class="row">
        <div class="col-md-12">

        <table id="people" class="table" width="100%">


        <thead>
        <tr>
            <th>{{__('personnel.name_surname')}}</th>
            <th>ADDRESS</th>
            <th>{{__('personnel.email')}}</th>
            <th>PHONE</th>
            <th>ACTION</th>

        </tr>
        </thead>
        <tbody>
        @foreach($peopleArray as $person)
        <tr>
            <td>{{$person['name']}}</td>
            <td>{{$person['address']}}</td>
            <td>{{$person['email']}}</td>
            <td>{{$person['phone']}}</td>
            <td>

            <button class="btn btn-danger" onclick="deletePersonnel({{$person['id']}});" style="cursor: pointer">X</button>
            <button class="btn btn-warning" onclick="updatePersonnel({{$person['id']}});" style="cursor: pointer">E</button>
            </td>

        </tr>
            @endforeach
        </tbody>
    </table>
        </div>
        </div>

    </div>
    </div>


@endsection

@section('scripts')

    <script>

        $(document).ready(function () {
            var table = $('#people').DataTable({
                searchable: true,
                ordering: true
            });

        });


        function createPersonnel() {

            $('#modal-title').html('Create Personnel');
            $.get('/create-personnel', function (mdata) {
              $("#modal-body").html(mdata);
            }).fail(
                    function (mdata){


                    }
            );
           $('#myModal').modal();
        }



        function updatePersonnel(id) {

            $('#modal-title').html('Update Personnel');
            $.get('/update-personnel/'+id, function (mdata) {
                $("#modal-body").html(mdata);
            }).fail(
                function (mdata){


                }

            );
            $('#myModal').modal();
        }

        function deletePersonnel(id){
            $('#modal-title').html('Delete Personnel');
            $.get('/delete-personnel/'+id, function (mdata) {
                $("#modal-body").html(mdata);
            }).fail(
                function (mdata){


                }
            );
            $('#myModal').modal();
        }


    </script>

@endsection

@section('css')
    <style>


    .table{
        width: 100%;
    }
    </style>

@endsection