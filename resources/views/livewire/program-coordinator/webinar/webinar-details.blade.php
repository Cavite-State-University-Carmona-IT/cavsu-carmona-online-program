<div>
    {{-- Do your work, then step back. --}}
    <div class="grid w-full grid-cols-8">
        <div class="col-span-6 col-start-2">
            <div class="grid w-full grid-cols-3">
                <div class="col-span-1">
                    <div class="max-w-full">
                        {{ $webinar->title }}
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="videoWrapper">
                        <iframe class="rounded-xl" width="560" height="349" src="https://www.youtube.com/embed/K3Qzzggn--s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .videoWrapper {
  position: relative;
  padding-bottom: 56.25%;
  /* 16:9 */
  padding-top: 25px;
  height: 0;
}

.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
</style>
