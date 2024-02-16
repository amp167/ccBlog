<x-layout>
        @foreach($blogs as $blog)
            <div class="{{$loop->even ? 'blogEven' : 'blogOdd'}}">
                <a href="blog/{{$blog->slug}}"><h1>{{$blog->title}}</h1></a>
                <a href="category/{{$blog->category->slug}}">Category : {{$blog->category->name}}</a>
                <p>published at - {{$blog->created_at->diffForHumans()}}</p>
                <p>{{$blog->intro}}</p>
            </div>
        @endforeach
</x-layout>

