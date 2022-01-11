<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th> 
    </tr>
  </thead>
  @foreach ($Categorii as $cat)
  <tbody>
    <tr>
      <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->name}}</td>
      <td>{{$cat->created_at}}</td>
   
    </tr>
  </tbody>
  @endforeach
</table>