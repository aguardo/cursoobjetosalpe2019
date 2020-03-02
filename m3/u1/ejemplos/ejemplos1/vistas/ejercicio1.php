<form method="get" action="<?= $this->crearRuta(["accion"=>"ejercicio1"])?>">
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
    
    </div>
    <div>
        <button>Calcular</button>
    </div>
</form>

