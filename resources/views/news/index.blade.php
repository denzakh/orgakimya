@foreach ($news as $new)
    <a href="/news/show/{{ $new->id }}">{{ $new->title }}</a>
@endforeach