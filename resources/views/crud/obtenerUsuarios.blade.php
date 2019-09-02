
@include ('includes.header')

<h2  align='center'>prueba de crud </h2>
<h3  align='center'>listado de usuarios</h3>

<table align='center'>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>edad</th>
        <th>calle</th>
        <th>colonia</th>
        <th>delegacion</th>
        <th>codigopostal</th>
        <th  spancol="2">detalles</th>
    </tr>
@foreach ($usuario as $dato)
    <tr>
        <td>
            {{$dato->users_id}}
        </td>
        <td>
            {{$dato->username}}
        </td>
        <td>
            {{$dato->lastname}}
        </td>
        <td>
            {{$dato->lastname2}}
        </td>
        <td>
            {{$dato->age}}
        </td>
        <td>
            {{$dato->street}}
        </td>
        <td>
            {{$dato->colony}}
        </td>
        <td>
            {{$dato->delegation}}
        </td>
        <td>
            {{$dato->postalcode}}
        </td>
        <td spancol="2">
        <form action="{{action('CrudController@detallesUsuarios')}}" method='POST'>
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$dato->users_id}}">
            <button type="submit">Editar</button>
            </form> 
            <form action="{{action('CrudController@destroyUser')}}" method='POST'>
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$dato->users_id}}">
            {{method_field('DELETE')}}
            <button type="submit" onclick="return confirm('¿Desea Borrar?');">Borrar</button>
            
            </form>
                <!-- url ('/crud/usuarios/'.$dato->users_id -->
        </td>
    </tr>
@endforeach

</table>

<a align='center' href="{{url('/crud/registro')}}">Registrar</a>



@include ('includes.footer')

