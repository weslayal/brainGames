<script src="js/controller/jogos/jmFacil.js"></script>
<!--- jogo da Memoria Facil--->
<script type="text/javascript">
    onload = GameControl.createGame();
</script>
<br><br><br><br><br>
<div class="col-md-12">
    <div class="col-md-3"></div>
    <div id="main" class="col-md-6 main">
        <div id="score"></div>
        <div id="game"></div>
        <div id="control">
            <input type="button" style="margin-top: 15px;" class="btn btn-success" value="Reiniciar"
                   onclick="GameControl.createGame()"/>
        </div>
    </div>
</div>