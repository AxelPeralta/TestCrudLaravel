@include ('includes.header')

<h2>prueba de crud </h2>
<h3 align='center'>datos personales de @foreach ($usuarios as $nombre) {{$nombre->username}} @endforeach </h3>

<form action="{{action('CrudController@updateUser' ,['id' => $nombre->users_id])}}" method="POST">
{{ csrf_field() }}
{{ method_field('PATCH') }}
    <table align='center'>
    @foreach ($usuarios as $dato)
        <tr>
        <th>ID</th>
        <td>
        <input type="text" name="pkid" value="{{$dato->users_id}}">
        </td>
        </tr>
        <tr>
        <th>Nombre</th>
        <td>
        <input type="text" name="username" value="{{$dato->username}}">
        </td>
        </tr>
        <tr>
        <th>Apellido Paterno</th>
        <td>
                <input type="text" name="lastname" value="{{$dato->lastname}}">
            </td>
        </tr>
        <tr>
        <th>Apellido Materno</th>
        <td>
                <input type="text" name="lastname2" value="{{$dato->lastname2}}">
            </td>
        </tr>
        <tr>
        <th>edad</th>
        <td>
                <input type="text" name="age" value="{{$dato->age}}">
            </td>
        </tr>
        <tr>
        <th>calle</th>
        <td>
                <input type="text" name="street" value="{{$dato->street}}">
            </td>
        </tr>
        <tr>
        <th>colonia</th>
        <td>
                <input type="text" name="colony" value="{{$dato->colony}}">
            </td>
            </tr>
        <tr>
        <th>delegacion</th>
        <td>
                <input type="text" name="delegation" value='{{$dato->delegation}}'>
            </td>
        </tr>
        <tr>
        <th>codigopostal</th>
        <td>
                <input type="text" name="cp" value='{{$dato->postalcode}}'>
            </td>
        </tr>
        <tr>
        <td>
        <a align='center' href="{{url('/crud/usuarios')}}">Regresar</a>
        </td>
        <td>
        <button type="submit">Actualizar</button>
        </td>
        </tr>
    @endforeach
    </table>
</form>
@include ('includes.footer')