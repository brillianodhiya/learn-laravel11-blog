<x-user-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 mt-12">All Categories</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($categories as $category)
                <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                    <h2 class="text-2xl font-bold mb-2">{{ $category->nama }}</h2>
                </div>
            @endforeach
        </div>

        <h1 class="text-3xl font-bold mb-6">Articles</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($articles as $article)
                <div class="bg-white shadow-md rounded-lg p-6 mb-4">
                    <img src="{{ $article->banner }}" alt="{{ $article->title }}" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-2xl font-bold mb-2">{{ $article->title }}</h2>
                    <p class="text-gray-600 mb-4">{{ Str::limit($article->body, 150) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500">{{ $article->created_at->format('d F Y') }}</span>
                        <a href="{{ route('article.show', $article->id_artikel) }}" class="text-blue-500 hover:underline">Read More</a>
                    </div>
                    <div class="mt-2">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                            {{ $article->category->nama }}
                        </span>
                        <span class="bg-gray-100 text-gray-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-200 dark:text-gray-800">
                            {{ $article->user->name }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-user-layout>
