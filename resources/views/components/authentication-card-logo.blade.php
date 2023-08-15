@props(['url' => route('login')])
<a {{ $attributes->merge(['href' => $url]) }}>
  <img src="{{ asset('img/shortlogo.gif') }}" class="img-opensoft" alt="{{ config('app.lastname', 'OPENSOFT') }}">
</a>