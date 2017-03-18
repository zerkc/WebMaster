<?php
    $thispage = $page;
    if(!isset($_SESSION['userActive']) && !$recipe[$page]['access']){
        $_SESSION['msg']='Debe iniciar session para acceder a esta pantalla';
        redirect("?page=login");
    }
?>
        <div class="visible-xs">
            <div class="row">
                <div class="col-xs-12">
                    <img src="img/<?php echo $recipe[$page]['image']; ?>" class="img-responsive" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Ingredientes</h2>
                    <?php foreach($recipe[$page]['ingredients'] as $k => $v){ ?>
                        <?php if(is_array($v)){ ?>
                            <h3><?php echo $k ?></h3>
                            <ul>
                            <?php foreach ($v as $value) { ?>
                                <li><?php echo $value; ?></li>
                            <?php } ?>
                            </ul>
                        <?php }else{ ?>
                            <ul>
                            <?php foreach ($recipe[$page]['ingredients'] as $value) { ?>
                                <li><?php echo $value; ?></li>
                            <?php }  break; ?>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <?php foreach($recipe[$page]['preparation'] as $i=>$v){ ?>
                        <li><b><?php echo ($i+1); ?></b> <?php echo $v; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <table class="hidden-xs" style="width: 100%">
            <tr>
                <td style="width: 100%">
                    <h2>Ingredientes</h2>
                    <?php foreach($recipe[$page]['ingredients'] as $k => $v){ ?>
                        <?php if(is_array($v)){ ?>
                            <h3><?php echo $k ?></h3>
                            <ul>
                            <?php foreach ($v as $value) { ?>
                                <li><?php echo $value; ?></li>
                            <?php } ?>
                            </ul>
                        <?php }else{ ?>
                            <ul>
                            <?php foreach ($recipe[$page]['ingredients'] as $value) { ?>
                                <li><?php echo $value; ?></li>
                            <?php }  break; ?>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                </td>
                <td>
                    <img src="img/<?php echo $recipe[$page]['image']; ?>" class="showItem" alt="">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Preparacion</h2>
                    <ul class="step">
                        <?php foreach($recipe[$page]['preparation'] as $i=>$v){ ?>
                        <li><b><?php echo ($i+1); ?></b> <?php echo $v; ?></li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>
        </table>

        <hr>
        <h1>Otras recetas</h1>