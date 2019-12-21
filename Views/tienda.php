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
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if (count($elements)) {
                                        foreach ($elements as $element) {
                                            echo '<tr>
                                                    <td>' . $element->get_element("nombre") . '</td>
                                                    <td>' . $element->get_element("detalle") . '</td>
                                                    <td>' . $element->get_element("precioPorHora") . '</td>
                                                    <td><input type="number" name="cantidad" value="1" class="form-control" /></td>
                                                    <td><input type="text" class="form-control" size="3" id="subtotal" 
                                                    onChange="calculo(cantidad.value, '.$element->get_element("precioPorHora").', this.value);"><td>
                                                    <td><a class="btn btn-sm btn-outline-primary" href="#">Agregar al carrito</a></td>';
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
    </div>
</div>