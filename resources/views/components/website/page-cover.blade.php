<div class="container @if($title || $subtitle) pt-16 @endif">
    @if($title)
    <h1 class="text-white text-4xl font-bold text-center uppercase">
        {{ $title }}
    </h1>
    @endif
    @if($subtitle)
    <h4 class="text-center text-white text-xl font-bold">
        {{ $subtitle }}
    </h4>
    @endif
</div>