<div class="container card pt-20 pb-20">
                    <div class="row justify-content-center mb-3">
                        <div class="col-12 col-md-6">
                            <label for="apellidoNombreL">Apellido y Nombre</label>
                            <input type="text" class="form-control" id="apellidoNombre"  placeholder="Apellido y Nombre">
                        </div>
                        <div class="col-6 col-md-3">
                            <label for="tipoDocL">Tipo de Documento</label>
                            <select id="tipoDoc" class="form-control">
                                <option value="DNI" selected>D.N.I</option>
                                <option value="CUIL">CUIL</option>
                                <option value="CUIT">CUIT</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-3">
                            <label for="documentoL">Nro. Documento</label>
                            <input type="number" class="form-control" id="documento"  placeholder="Numero Documento">
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-12 col-md-5">
                            <label for="domicilioL">Domicilio</label>
                            <input type="text" class="form-control" id="domicilio"  placeholder="Domicilio">
                        </div>
                        <div class="col-8 col-md-5">
                            <label for="localidadL">Localidad</label>
                            <input type="text" class="form-control" id="localidad"  placeholder="Localidad">
                        </div>
                        <div class="col-4 col-md-2">
                            <label for="codPostalL">Cod. Postal</label>
                            <input type="number" class="form-control" id="codPostal"  placeholder="Cod. Postal">
                        </div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-6 col-md-3">
                            <label for="telefonoL">Telefono</label>
                            <input type="number" class="form-control" id="telefono"  placeholder="Telefono">
                        </div>
                        <div class="col-6 col-md-5">
                            <label for="localidadL">Email</label>
                            <input type="text" class="form-control" id="email"  placeholder="Email">
                        </div>
                        <div class="col-6 col-md-4">
                            <label for="localidadL">¿Envio?</label>
                            <div class="row justify-content-start">
                            <div class="col-auto ml-5">
                                    <input class="form-check-input" type="radio" onchange="recalcularTotal(0)" name="exampleRadios" id="Nenvio" value="N" checked>
                                    <label class="form-check-label" for="envio">
                                        Retiro en Local
                                    </label>
                                </div>
                                <div class="col-auto ml-2">
                                    <input class="form-check-input" type="radio" onchange="recalcularTotal(850)" name="exampleRadios" id="envio" value="S">
                                    <label class="form-check-label" for="envio">
                                        Con Envío
                                    </label>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                            <label class="form-check-label text-left" for="envio" style="font-size:10px;">
                                Costo Envío $840.00
                            </label>
                            </div>
                        </div>
                    </div>
                    <?php
                        if(is_array($_SESSION['carrito']) && count($_SESSION['carrito'])!=0 ){
                    ?>
                            <div class="d-flex align-items-end">
                                <div class="col-12 col-md-6">
                                    <div class="row justify-content-start">
                                        <a href="pedido.php" class="btn btn-lg btn-danger text-white">VOLVER</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row justify-content-end">
                                        <h4>TOTAL:</h4>
                                        <h4 id="totalizarPedido"></h4>
                                    </div>
                                    <div class="row justify-content-end">
                                        <a href="" class="btn btn-lg btn-success text-white">FINALIZAR PEDIDO</a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    ?>
                </div>