@props(['url' => route('login'), 'wLogo' => 'w-16'])
<a {{ $attributes->merge(['href' => $url]) }}>
  <img src="{{ asset('img/shortlogo.gif') }}" {{ $attributes->merge(['class' => $wLogo]) }} alt="{{ config('app.lastname', 'OPENSOFT') }}">
</a>