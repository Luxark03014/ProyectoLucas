


<form method="POST" action={{ route('upload')}} enctype="multipart/form-data" >
    @csrf
    <label for="file"><p>Archivo: </p></label><br>
    <input type="file" name="file" required>
    <input type="submit" value="Enviar" >
</form> 