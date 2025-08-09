<x-layout :title="$pageTitle">
    <h2>Tag Title:  {{$tags->title}}</h2>


  
        <h3>related Post</h3>
        <ul>
            @forelse ($tags->post as $post)
            <li>
                <strong>{{$post->title}}</strong>
                <p>{{$post->body}}</p>
                <p>Author: {{$post->author}}</p>
                <a href="{{ route('blog.show', $post->id)}}">View Full Post</a>
            </li>
        
            @empty
                <p>NO Related Post Found For This tag </p>
            @endforelse
        </ul>    
</x-layout>