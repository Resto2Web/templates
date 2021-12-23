@extends('resto2web::layout.app')

@section('content')
    @include("resto2web.templates::components.layout.navbar")
{{--    @include("resto2web.templates::components.home.hero")--}}
    @include("resto2web.templates::components.home.about-us")
{{--    @include("resto2web.templates::components.home.menu")--}}
{{--    @include("resto2web.templates::components.home.pictures")--}}
{{--    @include("resto2web.templates::components.home.where-to-find-us")--}}
    @include("resto2web.templates::components.layout.footer")

@endsection
