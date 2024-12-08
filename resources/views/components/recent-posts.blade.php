<div class="pt-24 post-section pb-56">
    <div class="text-center">
        <h1 class="text-3xl oxygen">Most Recent</h1>
        <hr class="h-4 w-60 text-gray-400 mx-auto my-4" />
    </div>
    <div class="flex justify-center">

        <div class="grid grid-cols-3 gap-10 mx-auto">
            @foreach ($posts as $post)
            <x-post-card :post="$post" />
            @endforeach
        </div>
    </div>
</div>