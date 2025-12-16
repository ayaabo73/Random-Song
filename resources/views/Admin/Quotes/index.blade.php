<form action="{{route('quote.store') }}" method="get">
    @csrf
   
            <input type="text"  name="body" placeholder="body"  class="@error('body') is-invalid @enderror">
            @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
             
            @error('song_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
           <select class="form-select" aria-label="Default select example" name="song_id" class="@error('singer_id') is-invalid @enderror"  multiple  >
            
              <option selected >Open this select menu</option>
                  @foreach ($songs as $song )
               <option value="{{ $song ->id }}" >{{ $song->name }}</option>
               @endforeach
            </select>
           
             <br><br>
       <button type="submit">save</button>

   </form> 
 
 <table class="table">
    <thead>
  <tr>
   @foreach ($quotes as $quote)
       
   
    <th scope="name">{{ $quote ->body}}</th>
    </tr>

    
    @endforeach
 </thead>
 </table>