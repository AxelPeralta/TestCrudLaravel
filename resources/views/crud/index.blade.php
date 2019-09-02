@include ('includes.header')
<h2 align='center'>prueba de crud </h2>
<h3 align='center'>Registro de usuario</h3>
<form action="{{action ('CrudController@insertUser')}}" method='POST'>
<input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
  <table align='center'>
    <tr>
        <td>
            <label for="name">Nombre</label>
        </td>
        <td>
            <input type="text" name='name'>
        </td>
    </tr>

    <tr>
        <td>
            <label for="lastnameP">apellido paterno</label>
        </td>
        <td>
            <input type="text" name='lastnameP'>
        </td>
    </tr>

    <tr>
        <td>
            <label for="lastnameM">apellido materno</label>
        </td>
        <td>
            <input type="text" name='lastnameM'>
        </td>
    </tr>

    <tr>
        <td>
            <label for="age">Edad</label>
        </td>
        <td>
            <input type="number" name="age" value='0'>
        </td>
    </tr>

    <tr>
        <td>
            <label for="street">Calle:</label>
        </td>
        <td>
            <input type="text" name="street">
        </td>
    </tr>

    <tr>
        <td>
            <label for="colony">Colonia</label>
        </td>
        <td>
            <input type="text" name="colony">
        </td>
    </tr>

    <tr>
        <td>
            <label for="delegation">Delegacion</label>
        </td>
        <td>
            <input type="text" name="delegation">
        </td>
    </tr>

    <tr>
        <td>
            <label for="postalcode">Codigo Postal</label>
        </td>
        <td>
            <input type="text" name='postalcode'>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            <input type="submit" value="Registrar">
        </td>
    </tr>

  </table>

</form>

<a align='center' href="{{url('/crud/usuarios')}}">Usuarios</a>
@include ('includes.footer')


    
   
   

    
    

    
   

   