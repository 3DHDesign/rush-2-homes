@extends('components.layouts.master')
@push('style')
    <style>
        .select-dropdown {
            background: #f6f6f9;
            border: 1px solid #f4f4f4;
            font-size: 16px;
            border-radius: 10px;
            min-height: 60px;
            width: 100%;
            padding: 17px;
        }

        .input-row {
            display: flex;
            flex-direction: row;
            gap: 10px;
        }

        .small-price-type {
            font-size: 16px !important;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="bread-crumb-head">
                <div class="breadcrumb-title">
                    <h2>Buy Property List with Sidebar</h2>
                </div>
                <div class="breadcrumb-list">
                    <ul>
                        <li><a href="{{ route('home') }}">Home </a></li>
                        <li>Buy Property List with Sidebar</li>
                    </ul>
                </div>
            </div>
            <div class="breadcrumb-border-img">
                <img src="{{ asset('assets/img/bg/line-bg.png') }}" class="img-fluid" alt>
            </div>
        </div>
    </div>


    <div class="property-sidebar">
        <section class="feature-property-sec for-rent content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 theiaStickySidebar">
                        <div class="left-sidebar-widget property-sidebar">
                            <livewire:property-advance-filter>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <livewire:property-list :properties="$properties" :local="$local">
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
