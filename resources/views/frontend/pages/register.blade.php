@extends('components.layouts.master')
@push('style')
    <style>
        .login-wrapper {
            margin-bottom: 28vh;
        }

        .submit-btn-registration {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lds-ring {
            display: inline-block;
            position: relative;
            width: 30px;
            height: 34px;
            margin-right: 7px;
        }

        .lds-ring div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 20px;
            height: 20px;
            margin: 8px;
            border: 3px solid #fff;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #fff transparent transparent transparent;
        }

        .lds-ring div:nth-child(1) {
            animation-delay: -0.45s;
        }

        .lds-ring div:nth-child(2) {
            animation-delay: -0.3s;
        }

        .lds-ring div:nth-child(3) {
            animation-delay: -0.15s;
        }

        .submit-btn-registration:hover>div .lds-ring div {
            border: 3px solid #267cbe !important;
            border-color: #267cbe transparent transparent transparent !important;
        }

        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .btn-size {
            padding: 6px 10px !important;
            height: 45px !important;
        }
    </style>
@endpush
@section('content')
    <section class="price-section section">
        <div class="container">
            <div class="pricing-tab align-items-center justify-content-center">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                            type="button" role="tab" aria-controls="pills-home" aria-selected="true">Register for
                            User</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false" tabindex="-1">Register for Agent</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <livewire:user-registration-form />
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <livewire:agent-registration-form />
                </div>
            </div>
        </div>
    </section>
@endsection
