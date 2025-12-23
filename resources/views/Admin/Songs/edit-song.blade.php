<form action="{{route('song.update',$song->id) }}" method="post">
       @csrf
       @method('PATCH')
       <input type="text"  name="name" placeholder="name" value="{{$song->name }}" />
       <br><br>
       <select class="form-select" aria-label="Default select example" name="singer_id" >
              <option value="{{ $song->singer->id}}">{{ $song->singer->name }}</option>  
              @foreach ($singers as $singer )
                     <option value="{{ $singer ->id }}" >{{ $singer ->name }}</option>
              @endforeach
       </select>
       <br><br>
       <button type="submit">update</button>
</form>