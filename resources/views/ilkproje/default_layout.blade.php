<!DOCTYPE html>
<html lang="tr">
@include('ilkproje.partials.head')
<body>

<div class="container">

    @include('ilkproje.partials.header')


    <div class="ui padded grid">
        <div class="one wide  column"></div>
        <div class="fourteen wide  column">@yield('main')</div>
        <div class="one wide  column"></div>

    </div>



    @include('ilkproje.partials.footer')


</div>

</body>
</html>
@yield('scripts')
@yield('css')

