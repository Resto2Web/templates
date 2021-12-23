@extends('resto2web::layout.app')

@section('content')
    @include("resto2web.templates::components.layout.navbar-light")
    @include("resto2web.templates::components.home.hero-picture-left-text-right")
    @include("resto2web.templates::components.home.about-us-3-cards")
    @include("resto2web.templates::components.home.menu-link-on-picture")
    @include("resto2web.templates::components.home.pictures")
    @include("resto2web.templates::components.home.where-to-find-us")
    @include("resto2web.templates::components.layout.footer")

@endsection
