@if ($articles)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($articles as $article)
            @if ($article)
               <x-article-card :article="$article" />
            @endif
        @endforeach
    </div>
    {{ $articles->links() }}
@endif
