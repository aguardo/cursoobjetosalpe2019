<form method="get" action="<?= $this->crearRuta(["accion"=>"ejercicio2"])?>">
    <div>
    <label for="num1">Numero 1</label>
    <input type="number" name="num1" id="num1" value="<?= $this->num1?>">
    </div>
    <div>
    <label for="num1">Numero 2</label>
    <input type="number" name="num2" id="num1" value="<?= $this->num2?>">
    </div>
    <div>
    <label for="suma">Suma</label>
    <input type="number" name="suma" id="suma" disabled value="<?= $this->resultados["suma"]?>">
    </div>
     <div>
    <label for="resta">Resta</label>
    <input type="number" name="resta" id="resta" disabled value="<?= $this->resultados["resta"]?>">
    </div>
    
    <div>
    <label for="producto">Producto</label>
    <input type="number" name="producto" id="producto" disabled value="<?= $this->resultados["producto"]?>">
    </div>
    
     <div>
    <label for="cociente">Cociente</label>
    <input type="number" name="cociente" id="cociente" disabled value="<?= $this->resultados["cociente"]?>">
    </div>
    
    <div>
        <label for="resto">Resto</label>
    <input type="number" name="resto" id="resto" disabled value="<?= $this->resultados["resto"]?>">
    </div>
    
    
    </div>
    <div>
        <button>Calcular</button>
    </div>
</form>

