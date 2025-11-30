<div style="height: 100vh; display:flex;flex-direction:column; justify-content:center;align-items:center; text-align:center">
   <h1> 
     hi , Are you ready to listen to a new song?
     
   </h1>

   <form action="{{route('RandomSong') }}" method="Get">
    @csrf
                       
       <button type="submit">listen song</button>
   
   </form>

</div>