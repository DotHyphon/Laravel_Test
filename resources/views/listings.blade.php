<h1>{{$heading}}<h1>

    @unless(count($listings) == 0)
    @foreach($listings as $listing)
        <a href="/listings/{{$listing['id']}}"> <h3>{{$listing['title']}}</h3> </a>
    @endforeach
    @else
        <p>No listings found</p>
    @endunless