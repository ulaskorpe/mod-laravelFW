<div class="container">
    <div class="panel-heading"> </div>
    <div class="panel-body">
        <form class="form-horizontal"  role="form"  action="#" id="delete-personnel-form"
              method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="row row_1">
                <div class="col-md-12">
                Personnel {{$personnel['name']}} will be deleted ?
                </div>
            </div>
            <div class="row row_1">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <input type="submit" class="btn btn-danger" style="cursor: pointer;" value="Delete" class="ui primary button">
                </div>
            </div>
        </form>
    </div>
</div>


<script>


    $('#delete-personnel-form').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        save(formData);
    });




    function save(formData) {

        $.ajax({
            type: 'POST',
            url: '/delete-personnel/{{$personnel['id']}}',
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
