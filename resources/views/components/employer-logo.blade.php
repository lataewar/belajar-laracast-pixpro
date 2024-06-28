@props(['width' => 90])

<img src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}/{{ $width }}" alt=""
  class="rounded-xl">

{{-- <img src="http://placehold.it/42/42" alt="" class="rounded-xl"> --}}
