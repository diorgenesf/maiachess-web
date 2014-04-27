<div class="conteudo">
    <h1>Meu site</h1>
    <br/>
    <p>Texto Legal!</p>
    <p>
        <?php 
        foreach ($resultado as $value) {
            echo "   - ".$value->obs."<br />";
        } ?>
    </p>
</div>