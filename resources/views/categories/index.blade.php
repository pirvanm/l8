<div>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<h4>Numarul de categorii este : {{ count($Categorii)}} </h4>

@if(count($Categorii) > 0)
<p> Avem categorii</p>
@else()
<p> Nu avem categorii</p>
@endelse
@endif

 

  <h1> Zona de Categorii</h1>
  {{$Categorii}}

@include('categories.tabel');
</div>