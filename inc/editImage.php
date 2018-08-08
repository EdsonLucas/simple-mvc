<?php

    function image($value) {
        $path = $value;
        $fotos = scandir($path);

        foreach($fotos as $foto) {
            if(substr($foto, -4) === ".png") {
                echo '<li class="html jquery xs-no-padding">
                        <figure>
                            <div class="gallery-img lightbox-gallery">
                                <a href="'.$path.$foto.'" title=""><img src="'.$path.$foto.'" id="tz-bg-143" data-img-size="(W)800px X (H)650px" alt=""></a>
                            </div>
                        </figure>
                    </li>';
            }
        }
    }

    function ordenar($value){
        $path = $value;
        $arquivos = scandir($path);
        $num = 1;
        $nome = '';
        foreach($arquivos as $f) {
            if(substr($f, -4) == ".png" || substr($f, -4) == ".JPG"){
                if($num < 10){

                rename($path.$f,$path."00".$num.$nome.".jpg");
                echo "De ".$path.$f." para ".$path."00".$num.$nome.".jpg <br>";
                $num++;
                } else if($num < 100){
                    rename($path.$f,$path."0".$num.$nome.".jpg");
                echo "De ".$path.$f." para ".$path."0".$num.$nome.".jpg <br>";
                $num++;
                } else {
                    rename($path.$f,$path.$num.$nome.".jpg");
                echo "De ".$path.$f." para ".$path.$num.$nome.".jpg <br>";
                $num++;
                }
            }
        }
    }


?>
