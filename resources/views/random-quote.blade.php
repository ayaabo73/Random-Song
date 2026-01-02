<table class="table">
  <thead>
    <tr>
      <th>RandomQUOte</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="name">{{ $quote ->song->singer->name}}</td>
    </tr>
    <tr>
      <td scope="name_song">{{ $quote->song->name }}</td> 
    </tr>
    <tr>
      <td scope="body">{{ $quote->body }}</td>
    </tr>
  </tbody>
</table>