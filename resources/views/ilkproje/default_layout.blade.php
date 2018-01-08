<!DOCTYPE html>
<html lang="tr">
@include('ilkproje.partials.head')
<body>

<div class="container-fluid">


        <div class="row">
            <div class="col-md-12">@include('ilkproje.partials.header')</div>
        </div>

    <div class="row"> <div class="col-md-12">@yield('main')</div></div>




<div class="row"> <div class="col-md-12">@include('ilkproje.partials.footer')</div></div>
</div>

<?php
/* <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>*/
?>
<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body">

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



</body>
</html>
@yield('scripts')
@yield('css')

