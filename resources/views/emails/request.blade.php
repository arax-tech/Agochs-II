@component('mail::message')
# Booking Request

<b>Name : </b> {{ $details['name'] }}<br>
<b>Phone : </b> {{ $details['phone'] }}<br>
<b>Subject : </b> {{ $details['subject'] }}<br>
<b>Message : </b> {{ $details['message'] }}

<br>
Best Regards {{ config('app.name') }}
@endcomponent
