<x-layout>
    @if($greeting == "hello")
        <p>Hi from inside the if statement</p>
    @endif

    <p>{{ $greeting }}</p>
    <ul>
       @foreach($ninjas as $ninja)
        <li>
            <p>{{$ninja['name']}}</p>
            <a href="/ninjas/{{$ninja['id']}}">View Details</a>
        </li>
       @endforeach
    </ul>

</x-layout>