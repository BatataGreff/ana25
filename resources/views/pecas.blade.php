<h1>Lista peças</h1>
<hr>
@foreach ($Pecas as $peca)
 <h3><b>DATA: </b> {{$peca -> scheduledto}}</h3>
 <h3><b>MARCA: </b>{{$peca -> MARCA}}</h3>
 <h3><b>COR: </b>{{$peca -> COR}}</h3>
 <h3><b>ID: </b>{{$peca -> id}}</h3>
 
 <br>
 @endforeach