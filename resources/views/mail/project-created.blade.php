@component('mail::message')
# Introduction

The body of your message.
{{ $project->description }}

@component('mail::button', ['url' => url("/projects/" . $project->id)])
Button Text {{ $foo }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
