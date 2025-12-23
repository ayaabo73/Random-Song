<div style="height: 100vh; display:flex;flex-direction:column; justify-content:center;align-items:center; text-align:center">
    <h1> 
        Welcom  Back!Lets take a look at the latest developments.
    </h1>
    <form action="{{route('song.index') }}" method="Get">
        @csrf
        <button type="submit">songs</button>
    </form>

    <form action="{{route('singer.index') }}" method="Get">
        @csrf
        <button type="submit">singers</button>
    </form>

    <form action="{{route('quote.index') }}" method="Get">
        @csrf
        <button type="submit">quotes</button> 
    </form>
</div>