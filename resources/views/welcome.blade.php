@extends('app')

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/homepage.css">
@stop

@section('content')
    <div class="homepage">
        <div class="hero">
            <h2>Online Medical Records for Your Pet</h2>
        </div>

        <div class="process">
            <h2>Pet Medical records - Simplified</h2>

            <div class="item">
                <img src="{{ url('/img/process/1.jpg') }}">
                <div class="clearfix"></div>
                <span class="number">1</span>
                <p class="text">
                    Input your pet's information, including name of vet
                </p>
            </div>

            <div class="item">
                <img src="{{ url('/img/process/2.jpg') }}">
                <div class="clearfix"></div>
                <span class="number">2</span>
                <p class="text">
                    Our team will contact your vet and compile your pet's medical history
                </p>
            </div>

            <div class="item">
                <img src="{{ url('/img/process/3.jpg') }}">
                <div class="clearfix"></div>
                <span class="number">3</span>
                <p class="text">
                    Keep and share your pet's information
                </p>
            </div>
        </div>

        <div class="testimonials">
            <h2>Why people choose Fetch Medical</h2>

            <div class="item">
                <img src="{{ url('/img/testimonials/1.jpg') }}">
                <div class="content">
                    <h3 class="name">Caleb Smith</h3>
                    <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore 
                    </p>
                </div>
            </div>

            <div class="item">
                <img src="{{ url('/img/testimonials/2.jpg') }}">
                <div class="content">
                    <h3 class="name">Annika Hansen</h3>
                    <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore 
                    </p>
                </div>
            </div>

            <div class="item">
                <img src="{{ url('/img/testimonials/3.jpg') }}">
                <div class="content">
                    <h3 class="name">Excena Foer</h3>
                    <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore 
                    </p>
                </div>
            </div>
        </div>

        <div class="cta-section">
            <h2>You too can register an account for FREE</h2>
            <a href="{{ url('register') }}" class="btn btn-primary">Lets do this</a>
        </div>

        <div class="contact">
            <a href="mailto:hello@fetchmedical.com">hello@fetchmedical.com</a>
        </div>

    </div>
@stop