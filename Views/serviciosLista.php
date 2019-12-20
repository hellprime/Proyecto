<?php $msg = '';
echo ($msg) ? '<div class="alert alert-success" role="alert">' . $msg . '</div>' : '';?>

<div class="py-2" id="fullbody">
    <div class="container">
        <div class="py-5 my-3 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">


                        <a class="btn btn-primary mb-2" href="panelServicios.php?c=agregar"
                            class="btn btn-primary btn-lg mb-2">Agregar nuevo</a>
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col"></th>
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
                                                    <td><a class="btn btn-sm btn-outline-primary" href=panelServicios.php?c=editar&id=' . $element->get_element("id") . '>Editar </a>'
                                            . '<a class="btn btn-sm btn-outline-primary" href=panelServicios.php?c=ver&id=' . $element->get_element("id") . '>Ver </a>'
                                            . '<a class="btn btn-sm btn-outline-primary" href=panelServicios.php?c=borrar&id=' . $element->get_element("id") . '>Eliminar</a></td>
                                                    </tr>';
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