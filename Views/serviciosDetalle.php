<div class="py-2" id="fullbody">
    <div class="container">
        <div class="py-5 my-3 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div>
                            <h5 class="my-1">Nombre:</h5><?php echo $element->get_element("nombre"); ?>
                        </div>
                        <div>
                            <h5 class="my-1">Detalle:</h5><?php echo $element->get_element("detalle"); ?>
                        </div>
                        <div>
                            <h5 class="my-1">Precio por hora:</h5><?php echo $element->get_element("precioPorHora"); ?>
                        </div>
                        <a class="btn btn-primary mt-2"
                            href="panelServicios.php?c=editar&id=<?php echo $element->get_element("id"); ?>">Editar</a>
                        <a href="panelServicios.php?" class="btn btn-primary mt-2">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>