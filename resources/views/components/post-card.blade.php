<a href="" class="shadow-class rounded-lg w-96 flex flex-col h-full">
    <div class="relative">
        <img src="{{ asset($post['image']) }}" alt="post picture" class="w-96 h-40">
        <h1 class="text-white bg-yellow-500 absolute top-3 left-3 rounded-md text-xs px-2 py-1">{{ $post['category'] }}</h1>
    </div>
    <div class="border-rlb bg-white rounded-b-md flex flex-col justify-between flex-grow">
        <div class="space-y-2 p-6">
            <h1 class="text-xl font-normal">{{ $post['title'] }}</h1>
            <p class="text-md oxygen">{{ $post['description'] }}</p>
        </div>
        <div class="flex bg-gray-100 px-2 py-2 text-gray-400 items-center">
            <img src="{{ asset($post['author_image']) }}" alt="user profile picture" class="w-10 h-10 rounded-full">
            <h1 class="ml-2">{{ $post['author_name'] }}</h1>
            <h1 class="ml-auto">{{ $post['date'] }}</h1>
        </div>
    </div>
</a>