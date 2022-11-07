@component('mail::message')
# Message Details

<p>Firstname: {{ $loan->fname }}</p><br>
<p>Lastname: {{ $loan->lname }}</p><br>
<p>Email: {{ $loan->email }}</p><br>
<p>Phone: {{ $loan->phone }}</p><br>
<p>Country: {{ $loan->country }}</p><br>
<p>Address: {{ $loan->address }}</p><br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
