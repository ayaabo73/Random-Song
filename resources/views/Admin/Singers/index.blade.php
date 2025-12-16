<form action="{{route('singer.store') }}" method="get">
    @csrf
   
            <input type="text"  name="name" placeholder="name"  class="@error('name') is-invalid @enderror">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
           
             <br><br>
       <button type="submit">save</button>

   </form>


<table class="table">
    <thead>
  <tr>
   @foreach ($singers as $singer)
       
   
    <th scope="name">{{ $singer->name}}</th>
    </tr>
  
  
    
    @endforeach
 </thead>
 </table>