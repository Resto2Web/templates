@extends('resto2web::layout.app')

@section('content')
    @include("resto2web.templates::components.layout.navbar")
    @include("resto2web.templates::components.home.hero-chinese-restaurant")
    @include("resto2web.templates::components.home.menu-3-categories")
    @include("resto2web.templates::components.home.about-us-fixed-light-bg")
    @include("resto2web.templates::components.home.pictures")
    @include("resto2web.templates::components.home.where-to-find-us")
    @include("resto2web.templates::components.layout.footer")

@endsection
