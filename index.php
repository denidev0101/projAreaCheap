<div class="listing-card">
        <a href="indexDetalhes.php?index=<?=$iDois?>&type=<?php
          if($iUm == "Fazendas") echo "fazendas";
          else if($iUm == "Mansões") echo "mansoes";
          else if($iUm == "Quartos") echo "quartos";
        ?>" class="valor">
      <img src="<?=$resposta["Foto"]?>" alt="<?=$resposta["Localização"]?>"> 
     
      <div>
        <h4><?=$resposta["Localização"]?></h4> 
        <h2>R$<?=$resposta["ValorAluguel"]?> - Aluguel</h2>
        <h3><?=$resposta["Responsável"]?></h3> 
      </div>
      <button>Reservar</button>
    </a>
		</div>  
   
  <?php

         }
      }       
    }else{
        foreach($data as $iUm => $aCategoria){

          ?>
          <div class="listing-card">
             <a href="indexDetalhes.php?index=<?=$iUm?>&type=<?=$type?>">   
            <img src="<?=$aCategoria["Foto"]?>" alt="<?=$aCategoria["Localização"]?>"> 
           
            <div>
              <h3><?=$aCategoria["Responsável"]?></h3> 
              <h4><?=$aCategoria["Localização"]?></h4>
                 <div id="aluguel"> 
              <h2>R$<?=$aCategoria["ValorAluguel"]?></h2>
              <span> Aluguel</span> 
                 </div>
            </div>
            <button>Reservar</button>
          </a>
          </div>  
         
        <?php
             }
          } 

        ?>

 </main>
  <footer>
    <div>
    
   <p id="pfooter"> Contatos:<br>
    De segunda a sexta:  (77) 98812-3456<br>
    Sabados e Domingos:  (77) 98854-6783<br>
    Endereço:<br> IFBA Campus Brumado <br>
   </p>
    </div>
    &copy; <?php echo date("Y"); ?> Área Cheap. Todos os direitos reservados.<br>
  </footer>
</body>
</html>