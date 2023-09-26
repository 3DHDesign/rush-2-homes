<x-mail::message>
    <h1>Contact inquiry</h1>

    Client Name: {{ $data['name'] }}
    Client Email: {{ $data['email'] }}
    Mobile Number: {{ $data['number'] }}
    Subject: {{ $data['subject'] }}
    Description: {{ $data['description'] }}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
