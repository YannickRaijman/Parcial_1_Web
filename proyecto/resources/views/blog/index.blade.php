<x-layout title="Blog de Tecnología">
    <section>
        <h2>Noticias y Novedades</h2>
        
        <ul>
            @foreach($articles as $article)
                <li class="mb-3">
                    <article>
                        <h3>{{ $article->title }}</h3>
                        <p><strong>Categoría:</strong> {{ $article->category }} | <strong>Autor:</strong> {{ $article->author }} | <strong>Fecha:</strong> {{ $article->published_date }}</p>
                        <p>{{ $article->content }}</p>
                    </article>
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>