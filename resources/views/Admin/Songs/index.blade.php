<form action="{{route('song.store') }}" method="get">
    @csrf
   
            <input type="text"  name="name" placeholder="name"  class="@error('name') is-invalid @enderror">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
             
            @error('singer_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
           <select class="form-select" aria-label="Default select example" name="singer_id" class="@error('singer_id') is-invalid @enderror"  multiple  >
            
              <option selected >Open this select menu</option>
                  @foreach ($singers as $singer )
               <option value="{{ $singer ->id }}" >{{ $singer ->name }}</option>
               @endforeach
            </select>
           
             <br><br>
       <button type="submit">save</button>

   </form>


<table class="table">
    <thead>
  <tr>
   @foreach ($songs as $song)
       
   
    <th scope="name">{{ $song ->name}}</th>
    </tr>
  
    
    
    @endforeach
 </thead>
 </table>
 