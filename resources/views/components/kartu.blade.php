@props(['judul' => 'Tanpa Judul'])

<div class="kartu">
    <h3>{{ $judul }}</h3>

    <div class="isi">
        {{ $slot }}
    </div>

    @isset($footer)
        @if ($footer->isNotEmpty())
            <div class="kaki">
                {{ $footer }}
            </div>
        @endif
    @endisset
</div>