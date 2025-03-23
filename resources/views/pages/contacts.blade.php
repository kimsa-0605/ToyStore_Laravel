@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/contacts.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/subscribeSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/instagramSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/breadcrumbNav.css') }}">
<title>Catalog</title>
@endsection
@section('content')
    @php
    $pages = [
        ['name' => 'Home', 'url' => "/"],
        ['name' => 'Contacts', 'url' => "/contacts"]
    ];
    @endphp
    @include('components.breadcrumbSection', ['pages' => $pages])
    <!-- Map contact section -->
    <div class="map-conatact-container">
        <div class="map-contact">
            <div class="may-contact-content">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61349.64700643006!2d108.16550617972635!3d16.047164814852437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0xfc14e3a044436487!2zxJDDoCBO4bq1bmcsIEjhuqNpIENow6J1LCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1741649148615!5m2!1svi!2s"  
                    width="1020" height="450"  
                    style="border:0; border-radius: 10px; overflow: hidden;"  
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">  
                </iframe>
                <div class="message-contact-infor">
                    <div class="message-layout">
                        <p class="tittle">Leave a Message</p>
                        <p class="input-title">Full Name</p>
                        <input placeholder="Enter your name" type="text">
                        <p class="input-title">Email Address</p>
                        <input placeholder="Your contact email" type="text">
                        <p class="input-title">Message</p>
                        <textarea placeholder="Message text..." name="" id=""></textarea>
                        <div class="button-contact-map"></div>
                    </div>
                    <div class="contact-infor-layout">
                        <p class="tittle">Contact Info</p>
                        <div class="contact-infor-content">
                            <p class="text">4293  Euclid Avenue, Los Angeles, CA 90012</p>
                            <p class="text">+1 213 974-3898</p>
                            <p class="text email">toystore@template.com</p>
                        </div>
                        <p class="follow-us-text">Follow Us</p>
                        <div class="contact-infor-icon">
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-square-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-pinterest"></i>
                            <i><i class="fa-brands fa-youtube"></i></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End map conatact section -->
    @include('components.instagramSection')
    @include('components.subscribeSection')
@endsection