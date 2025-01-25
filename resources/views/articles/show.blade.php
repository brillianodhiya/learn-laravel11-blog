<x-user-layout>
    <div class="container mx-auto px-4 py-8">
        <a
        href="{{ route('articles.index') }}" class="flex flex-row flex-wrap items-center relative gap-2">
            <svg width="24px" height="24px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><path fill="#000000" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"/><path fill="#000000" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"/></svg>

            <h1 class="text-base text-blue-500 font-bold m-0">Back to Articles</h1>
        </a>
        <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
        <img src="{{ $article->banner }}" alt="{{ $article->title }}" class="w-full h-96 object-cover rounded-lg mb-4">
        <p class="text-gray-600 mb-4">{{ $article->body }}</p>
        <div class="flex items-center justify-between">
            <span class="text-gray-500">{{ $article->created_at->format('d F Y') }}</span>
            <a href="{{ route('articles.index') }}" class="text-blue-500 hover:underline">Back to Articles</a>
        </div>
    </div>
</x-user-layout>
