<form action="{{route('singer.update',$singer->id) }}" method="post">
     @csrf
    
            <input type="text"  name="name" placeholder="name" value="{{$singer->name }}" />
            
            <br><br>
             
           
              <br><br>
       <button type="submit">update</button>
</form>