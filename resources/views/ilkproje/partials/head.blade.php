<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="@yield('metaDescription')">
    <meta name="keywords" content="@yield('metaKeywords')">
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/datatables.css') !!}
    {!! Html::script('js/jquery-3.2.1.min.js') !!}
    {!! Html::script('js/popper.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/datatables.js') !!}
</head>