@extends('layouts.app')
@section('content')
    <div class="row" id="start">
        <div class="col-md-6">
            <img src="" alt="">
        </div>
        <div class="col-md-6">
            <p class="text-upperclass mb-2">Laravel Developer</p>
            <h3 class="font-weight-bold text-black mb-4">Joy Das</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quisquam dolores placeat eveniet dolor, pariatur optio cumque nihil quae nostrum eius! Magnam, quasi modi tempora dolorem quos assumenda laboriosam ipsa!</p>
        </div>
    </div>

    {{-- What I Do --}}
    <div style="margin-top: 8rem">
        <h4 class="font-weight-bold">What I Do</h4>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h5>CopyWrite</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum et minus non enim, quos voluptates possimus dolores, harum ipsa cupiditate, velit impedit iure! Provident beatae incidunt ea deserunt iure ut.</p>
                </div>
                <div class="mt-2">
                    <h5>Web Developer</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum et minus non enim, quos voluptates possimus dolores, harum ipsa cupiditate, velit impedit iure! Provident beatae incidunt ea deserunt iure ut.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <h5>CopyWrite</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum et minus non enim, quos voluptates possimus dolores, harum ipsa cupiditate, velit impedit iure! Provident beatae incidunt ea deserunt iure ut.</p>
                </div>
                <div class="mt-2">
                    <h5>Web Developer</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum et minus non enim, quos voluptates possimus dolores, harum ipsa cupiditate, velit impedit iure! Provident beatae incidunt ea deserunt iure ut.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Clients --}}
    <div style="margin-top: 8rem">
        <h4 class="font-weight-bold">Happy Clients</h4>
        <hr>
        <div class="row text-center">
            <div class="col-md-3">
                <p>Image</p>
            </div>
            <div class="col-md-3">
                <p>Image</p>
            </div>
            <div class="col-md-3">
                <p>Image</p>
            </div>
            <div class="col-md-3">
                <p>Image</p>
            </div>
        </div>
    </div>

    {{-- Fun Facts --}}
    <div style="margin-top: 8rem">
        <h4 class="font-weight-bold">Fun Facts</h4>
        <hr>
        <div class="row text-center">
            <div class="col-md-3">
                <p>Happy Clients</p>
            </div>
            <div class="col-md-3">
                <p>Working Hours</p>
            </div>
            <div class="col-md-3">
                <p>Aword Won</p>
            </div>
            <div class="col-md-3">
                <p>Tea Consumed</p>
            </div>
        </div>
    </div>
@endsection