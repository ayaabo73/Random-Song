<form action="{{route('quote.update',$quote->id) }}" method="post">
       @csrf
       @method('PATCH')
       <input type="text"  name="body" value="{{$quote->body }}" />    
       <br><br>
       <select class="form-select" aria-label="Default select example" name="song_id" >
              @foreach ($songs as $song )
              <option value="{{ $song ->id }}" @selected(old('song_id',$quote->song->id)== $song ->id )> {{ $song ->name }}</option>
              @endforeach
       </select>   
       <br><br>
       <button type="submit">update</button>
</form>