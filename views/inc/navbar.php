<div class="full-width navBar">
    <div class="full-width navBar-options">
        
        <nav class="navBar-options-list">
            <ul class="list-unstyle">
                <li>
			        <small>☰</small>
                </li>
                <li class="text-condensedLight noLink" >
                    <small><?php echo $_SESSION['usuario']; ?></small>
                </li>
                <li class="noLink">
                    <?php
                        if(is_file("./app/views/fotos/".$_SESSION['foto'])){
                            echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/'.$_SESSION['foto'].'">';
                        }else{
                            echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/default.png">';
                        }
                    ?>
                </li>
        </nav>
    </div>
</div>