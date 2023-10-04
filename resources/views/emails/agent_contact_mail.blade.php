<x-mail::message>
    <h1>R2H{{ $data['property_code'] }} Property Inquiry From {{ $data['name'] }}</h1>

    Client Name: {{ $data['name'] }}
    Client Email: {{ $data['email'] }}
    Mobile Number: {{ $data['number'] }}
    Description: {{ $data['description'] }}

    Property Details

    Property Code: R2H{{ $data['property_code'] }}
    Property Title: {{ $data['property_title'] }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
