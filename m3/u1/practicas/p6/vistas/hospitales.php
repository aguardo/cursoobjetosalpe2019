<form method="get" action="<?= $this->crearRuta(["accion"=>"restaurantes"])?>">
    <div>
    <label for="coordenada_x">Introduce coordenada x</label>
    <input type="number" name="x" required id="coordenada_x">
    </div>
    <div>
    <label for="coordenada_y">Introduce coordenada y</label>
    <input type="number" name="y" required id="coordenada_y">
    </div>
    <div>
    <div>
        <button>Añadir restaurantes</button>
    </div>
</form>
