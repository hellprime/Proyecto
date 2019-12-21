<?php $msg = '';
echo ($msg) ? '<div class="alert alert-success" role="alert">' . $msg . '</div>' : '';?>

<div class="py-2" id="fullbody">
    <div class="container">
        <div class="py-5 my-3 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (count($elements)) {
                                        foreach ($elements as $element) {
                                            echo '<tr>
                                                    <td>' . $element->get_element("nombre") . '</td>
                                                    <td>' . $element->get_element("detalle") . '</td>
                                                    <td>' . $element->get_element("precioPorHora") . '</td>';
                                        }
                                    } else {
                                        echo '<h2>No hay servicios disponibles</h2>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 mt-3 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <h1>Datos de la compra</h1>
                        <p class="lead">Por favor llena tus datos para completar la compra</p>
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="Nombre">Nombre</label>
                                <input type="text" class="form-control" name="Nombre" placeholder="Jose Perez">
                            </div>
                            <div class="form-group">
                                <label for="Correo">Correo electronico</label>
                                <input type="email" class="form-control" name="Correo" placeholder="nombre@ejemplo.com">
                            </div>
                            <div class="form-group">
                                <label for="Razon">Metodo de pago</label>
                                <select class="form-control" name="Razon">
                                    <option value="Problema con servicios">Tarjeta VISA</option>
                                    <option value="Problema con productos">Tarjeta Master Card</option>
                                    <option value="Problema con productos">PayPal</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Mensaje">Direccion de envio</label>
                                <textarea class="form-control" name="Mensaje" rows="2"
                                    placeholder="Por favor usa una direccion exacta"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>