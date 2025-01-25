<x-user-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Latest Articles</h1>
        @if ($articles)
            <x-article-list :articles="$articles" />
        @endif
    </div>
</x-user-layout>
