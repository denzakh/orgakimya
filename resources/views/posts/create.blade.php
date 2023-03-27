@foreach ($news as $new)
    <a href="/news/{{ $new->id }}">{{ $new->title }}</a>
@endforeach