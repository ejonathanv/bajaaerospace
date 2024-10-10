<a href="{{ route('video-post', $slug) }}">
    <div class="video-thumb w-auto bg-gray-700 rounded overflow-hidden block bg-cover bg-center shadow relative flex flex-col items-start justify-start @if($size == 'base') h-60 @elseif($size == 'sm') h-32 @endif"   
        style="background-image: url('{{ $cover }}')">
        <div class="absolute bg-opacity-25 bg-primary-900 top-0 bottom-0 right-0 left-0 z-1"></div>
        <span class="text-xs text-secondary-100 bg-primary-900 p-2 mt-2 rounded-r font-bold relative z-2">
            {{ $date }}
        </span>
        <div class="absolute top-0 bottom-0 right-0 left-0 flex items-center justify-center z-2 opacity-50 play-btn">
            <i class="fa fa-play-circle text-6xl text-white z-2"></i>
        </div>
    </div>
</a>

<div class="mt-4 flex flex-col items-start justify-end">
    <a href="{{ route('video-post', $slug) }}" class="text-lg font-bold @if($theme == 'dark') text-white @else text-primary-900 @endif">
        {{ $title }}
    </a>
</div>

