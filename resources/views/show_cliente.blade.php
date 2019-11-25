<h1>Cliente  {{$cliente->id}}</h1>

<h3><b>NOME: </b>{{$cliente -> nome}}</h3>
 <h3><b>EMAIL: </b>{{$cliente -> email}}</h3>
 <h3><b>TELEFONE: </b>{{$cliente -> telefone}}</h3>
 <h3><b>ID: </b>{{$cliente-> id}}</h3>
 <h3><b>Criada em: </b>{{$cliente -> created_at}}</h3>
 <h3><b>Atualizada em : </b> {{date( 'd/m/Y' , strtotime($cliente -> updated_at))}}</h3>
 