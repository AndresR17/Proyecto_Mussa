<br>
<center> <h1><strong>NUEVO REGISTRO </strong></h1> </center>

<a name="" id="" class="btn btn-success" href="index.php" role="button">Atras</a>


<br><br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="card">
  <div class="card-header"><strong>
    Datos del concursante
  </strong></div>
  <div class="card-body">


    <form action="guardar.php" method="post" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="" class="form-label">Primer nombre</label>
        <input type="text" class="form-control" name="pnombre" id="" aria-describedby="helpId" placeholder="Primer nombre">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Segundo nombre</label>
        <input type="text" class="form-control" name="snombre" id="" aria-describedby="helpId" placeholder="Segundo nombre">
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Primer apellido</label>
        <input type="text" class="form-control" name="papellido" id="" aria-describedby="helpId" placeholder="Primer apellido">

      </div>

      <div class="mb-3">
        <label for="" class="form-label">Segundo Apellido</label>
        <input type="text" class="form-control" name="sapellido" id="" aria-describedby="helpId" placeholder="Segundo apellido">

      </div>

      <div class="mb-3">
        <label for="" class="form-label">Cedula(PDF)</label>
        <input type="file" class="form-control" name="cedula" id="cedula" aria-describedby="helpId" placeholder="Cargar archivo">

      </div>

      <div class="mb-3">
        <label for="" class="form-label">Foto grupal</label>
        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="Cargar archivo">

      </div>

      <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="">

      </div>

      <div class="mb-3">
        <label for="idpuesto" class="form-label">Concurso</label>
        <select class="form-select form-select-sm" name="concurso" id="idpusto">
          <option selected>Ponente</option>
          <option value="">Torneo de Robotica</option>
          <option value="">Poster</option>
          
        </select>
      </div>
        <textarea name="mensaje" id="" cols="100" rows="10" placeholder="Cuentanos de tu grupo:"></textarea>
        <br>
        <br>

      <button type="submit" class="btn btn-success">Agregar registro</button>
      <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    </form>


  </div>
  <div class="card-footer text-muted"></div>
</div>