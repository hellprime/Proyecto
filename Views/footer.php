<footer class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-3" id="Soporte">
                <h2 id="Soporte"> Soporte </h2>
                <form action="contacto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Jose Perez">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo electronico</label>
                        <input type="email" class="form-control" name="correo" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="form-group">
                        <label for="razon">Razon del contacto</label>
                        <select class="form-control" name="razon">
                            <option value="Problema con servicios">Problema con servicios</option>
                            <option value="Problema con productos">Problema con productos</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Consulta</label>
                        <textarea class="form-control" name="mensaje" rows="3"
                            placeholder="En que podemos ayudarte?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-3" id="Contactenos">
                <h2 id="Contactenos"> Contactenos </h2>
                <form action="contacto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Jose Perez">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo electronico</label>
                        <input type="email" class="form-control" id="correo" placeholder="nombre@ejemplo.com">
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Consulta</label>
                        <textarea class="form-control" id="mensaje" rows="3"
                            placeholder="En que podemos ayudarte?"></textarea>
                    </div>
                    <button type="Enviar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <p>Creado por Jose Mendieta © Bahamonde | <a href="index.php">Inicio</a></p>
        <p>Proyecto final para la clase de Programacion 4.</p>
    </div>
</footer>