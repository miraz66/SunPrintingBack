<h1>{{$heading}}</h1>

@unless (count($listings) == 0)
    
@foreach($listings as $listing)
    <h1> 
        <a href="/listings/{{$listing['id']}}">
            {{$listing['title']}}
        </a>
    </h1>
    <p>{{$listing['description']}}</p>
@endforeach;

@else 
<p>No Listing Found</p>

@endunless