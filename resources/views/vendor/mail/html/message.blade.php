<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">

</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>

</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
