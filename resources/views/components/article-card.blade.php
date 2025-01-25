<div class="bg-white shadow-md rounded-lg p-6 mb-4">
    <img src="{{ $article->banner }}" alt="{{ $article->title }}" class="w-full h-48 object-cover rounded-lg mb-4">
    <h2 class="text-2xl font-bold mb-2">{{ $article->title }}</h2>
    <p class="text-gray-600 mb-4">{{ Str::limit($article->body, 150) }}</p>
    <div class="flex items-center justify-between">
        <span class="text-gray-500">{{ $article->created_at->format('d F Y') }}</span>
        <a href="{{ route('article.show', $article->id_artikel) }}" class="text-blue-500 hover:underline">Read More</a>
    </div>
</div>
