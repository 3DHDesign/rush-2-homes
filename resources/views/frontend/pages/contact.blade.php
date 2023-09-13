@extends('components.layouts.master')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>Contact Us</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="{{ route('home') }}">Home </a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="{{ asset('assets/img/bg/line-bg.png') }}" alt="contact us">
            </div>
        </div>
    </div>
    <section class="section contact-info-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="#">
                        <div class="card">
                            <div class="card-header">
                                <h3>Get In Touch</h3>
                                <p style="margin-top: 20px;">Tell us about your property needs and our team of expert agents
                                    will be in touch with you
                                    soon to help you find the perfect property.</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="14" placeholder="Comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-primary">Submit Enquiry</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <h3>Contact Details</h3>
                    <div class="row">
                        <div class="col-lg-12 d-flex">
                            <div class="flex-fill">
                                <div class="contact-info-details d-flex align-items-center">
                                    <span><img src="assets/img/icons/phone.svg" alt="Image"></span>
                                    <div>
                                        <h4>Call Us At</h4>
                                        <a href="tel:+94777707874">(+94) 77770 7874</a>,
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <div class="flex-fill">
                                <div class="contact-info-details d-flex align-items-center">
                                    <span><img src="assets/img/icons/mail.svg" alt="Image"></span>
                                    <div>
                                        <h4>Email Us</h4>
                                        <a href="mailto:support@rushlankagroup.com">support@rushlankagroup.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <div class="flex-fill">
                                <div class="contact-info-details d-flex align-items-center">
                                    <span><img src="assets/img/icons/map-pin.svg" alt="Image"></span>
                                    <div>
                                        <h4>Location</h4>
                                        <p>No. 31, Melbourne Avenue, Colombo 04, Sri Lanka</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="map-location">
                        <h3>Find Us On</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0447497119526!2d79.85292567499616!3d6.885243393113735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bc307c71359%3A0x179067ab9ae5e470!2s31%20Melbourne%20Ave%2C%20Colombo!5e0!3m2!1sen!2slk!4v1694581574031!5m2!1sen!2slk"
                            height="359"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
