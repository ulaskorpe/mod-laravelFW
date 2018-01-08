<div class="container">
    <div class="panel-heading"> </div>
    <div class="panel-body">
        <form class="form-horizontal"  role="form"  action="{{route('create-personnel')}}" id="create-personnel-form"
              method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row row_1">

                <div class="col-md-4">   <label for="">Name Surname : </label></div>
                <div class="col-md-8">
                <input type="text" name="name_surname" id="name_surname" class="form-control" required></div>

            </div>
            <div class="row row_1">

                <div class="col-md-4">   <label for=""> Gender : </label></div>
                <div class="col-md-8">
                    <select name="gender" id="gender" class="form-control">
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>

                </div>
            </div>
            <div class="row row_1">

                <div class="col-md-4">   <label for="">Address : </label></div>
                <div class="col-md-8">
                    <input type="text" name="address" id="address" class="form-control" required></div>

            </div>


            <div class="row row_1">

                <div class="col-md-4">   <label for="">Email : </label></div>
                <div class="col-md-8">
                    <input type="email" name="email" id="email" class="form-control" required></div>

            </div>

            <div class="row row_1">

                <div class="col-md-4">   <label for="">Phone : </label></div>
                <div class="col-md-8">
                    <input type="text" name="phone" id="phone" class="form-control" required></div>

            </div>

            <div class="row row_1">

                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <input type="submit" class="btn btn-primary" value="Create" class="ui primary button">

                     </div>


            </div>
        </form>
    </div>
</div>


<script>


    $('#create-personnel-form').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        save(formData);
    });

    function save(formData) {
        $.ajax({
            type: 'POST',
            url: '/create-personnel',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                alert(data);
                location.reload();
            },
            error: function (data){

                if (data.status === 422) {
                    var errors =data.responseJSON.errors;
                        var message="";
                    $.each(errors, function (key, value) {
                       message+=key+' : '+value;
                    });
                    alert(message);
                }
                if(data.status === 500){

                }

            }
        });
    }

</script>

<style>

    .row_1{
        margin-top: 10px;
    }

</style>
