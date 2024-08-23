@if($last_webinar)
    @if($last_webinar->video)
        <div class="mt-4">
            <h2 class="text-2xl font-bold text-center md:text-left">
                Out latest webinar
            </h2>

            <!-- VIDEO DE YOUTUBE -->
            <div class="flex flex-col md:flex-row md:items-stretch space-y-10 md:space-y-0 md:space-x-10" x-data="{
                currentVideo: '{{ $last_webinar->video }}',
                getWebinar(webinar_id){
                    this.currentVideo = webinar_id;
                    console.log(this.currentVideo);
                    this.load_video_into_iframe();
                },
                load_video_into_iframe(){
                    const t = this;
                    const iframe = document.getElementById('videoPlayerIframe');
                    iframe.src = 'https://www.youtube.com/embed/' + t.currentVideo;
                }
            }" x-init="load_video_into_iframe">
                <div class="w-full md:w-9/12">
                    <iframe class="w-full aspect-video" 
                        title="Baja Aerospace Cluster - Webinar"
                        frameborder="0"
                        id="videoPlayerIframe"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen></iframe>
                </div>
                <div class="w-full md:w-3/12 overflow-y-scroll h-full videoPlayerList">
                    <ul class="space-y-3">
                        @foreach($webinars as $webinar)
                            <li>
                                <div class="videoThumb" 
                                    style="background-image: url('https://img.youtube.com/vi/{{ $webinar->video }}/mqdefault.jpg')"
                                    x-on:click.prevent="getWebinar('{{ $webinar->video }}')">
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    @endif
@endif