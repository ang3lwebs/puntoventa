<div class="table-container">
    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th class="has-text-centered">#</th>
                <th class="has-text-centered">Código de barras</th>
                <th class="has-text-centered">Producto</th>
                <th class="has-text-centered">Cant.</th>
                <th class="has-text-centered">Precio</th>
                <th class="has-text-centered">Subtotal</th>
                <th class="has-text-centered">Actualizar</th>
                <th class="has-text-centered">Remover</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_SESSION['datos_producto_venta']) && count($_SESSION['datos_producto_venta'])>=1){

                    $_SESSION['venta_total']=0;
                    $cc=1;

                    foreach($_SESSION['datos_producto_venta'] as $productos){
            ?>
            <tr class="has-text-centered" >
                <td><?php echo $cc; ?></td>
                <td><?php echo $productos['producto_codigo']; ?></td>
                <td><?php echo $productos['venta_detalle_descripcion']; ?></td>
                <td>
                    <div class="control">
                        <input class="input sale_input-cant has-text-centered" value="<?php echo $productos['venta_detalle_cantidad']; ?>" id="sale_input_<?php echo str_replace(" ", "_", $productos['producto_codigo']); ?>" type="text" style="max-width: 80px;">
                    </div>
                </td>
                <td><?php echo MONEDA_SIMBOLO.number_format($productos['venta_detalle_precio_venta'],MONEDA_DECIMALES,MONEDA_SEPARADOR_DECIMAL,MONEDA_SEPARADOR_MILLAR)." ".MONEDA_NOMBRE; ?></td>
                <td><?php echo MONEDA_SIMBOLO.number_format($productos['venta_detalle_total'],MONEDA_DECIMALES,MONEDA_SEPARADOR_DECIMAL,MONEDA_SEPARADOR_MILLAR)." ".MONEDA_NOMBRE; ?></td>
                <td>
                    <button type="button" class="button is-success is-rounded is-small" onclick="actualizar_cantidad('#sale_input_<?php echo str_replace(" ", "_", $productos['producto_codigo']); ?>','<?php echo $productos['producto_codigo']; ?>')" >
                        <i class="fas fa-redo-alt fa-fw"></i>
                    </button>
                </td>
                <td>
                    <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/ventaAjax.php" method="POST" autocomplete="off">

                        <input type="hidden" name="producto_codigo" value="<?php echo $productos['producto_codigo']; ?>">
                        <input type="hidden" name="modulo_venta" value="remover_producto">

                        <button type="submit" class="button is-danger is-rounded is-small" title="Remover producto">
                            <i class="fas fa-trash-restore fa-fw"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <?php
                    $cc++;
                    $_SESSION['venta_total']+=$productos['venta_detalle_total'];
                }
            ?>
            <tr class="has-text-centered" >
                <td colspan="4"></td>
                <td class="has-text-weight-bold">
                    TOTAL
                </td>
                <td class="has-text-weight-bold">
                    <?php echo MONEDA_SIMBOLO.number_format($_SESSION['venta_total'],MONEDA_DECIMALES,MONEDA_SEPARADOR_DECIMAL,MONEDA_SEPARADOR_MILLAR)." ".MONEDA_NOMBRE; ?>
                </td>
                <td colspan="2"></td>
            </tr>
            <?php
                }else{
                        $_SESSION['venta_total']=0;
            ?>
            <tr class="has-text-centered" >
                <td colspan="8">
                    No hay productos agregados
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>