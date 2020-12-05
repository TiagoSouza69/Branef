<html>
    <head>
       <link rel="stylesheet" href="listagem.css">
       <script src="jquery-3.5.1.js"></script>
       <script type="text/javascript">
         $(document).ready(function(e) {
          $('.pesquisar').click(function(){
            $(("#tabela input")||("#ls-select")).keyup(function(){        
        var index = $(this).parent().index();
        var nth = "#tabela td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $("#tabela tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabela input").blur(function(){
        $(this).val("");
    }); 
  });
});
</script>
    </head>
    <body>
    <div class="dropdown" align="center">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php
      $email = $_POST["email"];  
      echo "usuário logado: " ;
      echo $email;  
?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="index.html">Sair</a>
    </div>
</div> 
    <img src="http://branef.com.br/wp-content/uploads/2019/12/branef-logo.png"> <nav>
        <ul class="menu" >
              <li><a href="http://branef.com.br/">Home</a></li>
              <li><a href="http://branef.com.br/produtos/">Servicos</a></li>
              <li><a href="http://branef.com.br/quem-somos/">Detalhe</a></li>
              
                                  
      </ul>
      </nav>
      <br><br><br>
      <table border="1" id="tabela">
      <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Empresa</th>
                    <th>Buscar</th>
                </tr>
                <tr>
                    <th><input type="text" id="txtColuna1"/></th>
                    <th><input type="email" id="txtColuna2"/></th>
                    <th><input type="text" id="txtColuna3"/></th>
                  <th><select name="select-simples" id="ls-select" class="ls-select">
                  <option value="pu"></option>  
                   <option value="BR">Branef</option>
                    <option value="RW">Rainbow</option>
                    <option value="DP">Deep Purple</option>
                    <option value="BB">E.C.Bahia</option>
                    <option value="PL">E.C.Vitoria</option>
                 </select></th>
                 <th><button type="submit" class="pesquisar" onclick="window.location.href='#pesquisar'">Submeter</button>
                </tr>            
            </thead>  
           <tbody>     
            <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>CPF</td>
            <td>Empresa</td>
            <td>Ação</td>
        </tr>
        <tr>
            <td>Tiago Souza</td>
            <td>tiagoprog@Branef.com</td>
            <td>0000110000-2</td>
            <td>Branef</td>
            <td><a href="detalhe.html" data-toggle="tooltip" data-placement="top" title="Detalhe">Detalhe</a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="remover!">Remover</a></td>
        </tr>
        <tr>
            <td>Fernanda</td>
            <td>fernada@Branef.com</td>
            <td>1111001111-9</td>
            <td>Branef</td>
            <td><a href="detalhe.html" data-toggle="tooltip" data-placement="top" title="Detalhe">Detalhe</a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="remover!">Remover</a></td>
        </tr>
        <tr>
            <td>Blackmore</td>
            <td>Blackus@rainbow.com</td>
            <td>323232456-0</td>
            <td>Rainbow</td>
            <td><a href="detalhe.html" data-toggle="tooltip" data-placement="top" title="Detalhe">Detalhe</a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="remover!">Remover</a></td>
        </tr>
        <tr>
            <td>João</td>
            <td>jon@deeppurple.com</td>
            <td>234234561-2</td>
            <td>Deep Purple</td>
            <td><a href="detalhe.html" data-toggle="tooltip" data-placement="top" title="Detalhe">Detalhe</a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="remover!">Remover</a></td>
        </tr>
        <tr>
            <td>bôbô</td>
            <td>bob@bahia.com</td>
            <td>456567890-1</td>
            <td>E.C.Bahia</td>
            <td><a href="detalhe.html" data-toggle="tooltip" data-placement="top" title="Detalhe">Detalhe</a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="remover!">Remover</a></td>
        </tr>
        <tr>
            <td>Bebeto</td>
            <td>bebeto@vitoria.com</td>
            <td>456123789-0</td>
            <td>E.C.Vitoria</td>
            <td><a href="detalhe.html" data-toggle="tooltip" data-placement="top" title="Detalhe">Detalhe</a>
            <a href="#" data-toggle="tooltip" data-placement="bottom" title="remover!">Remover</a></td>
        </tr>
       </tbody>
    </table>
    

      <div id="lateral">
        <div id="menu">
                      
        <h3 class="link-titulo">Sidebar</h3>
          <ul class="box">					
            <li><a href="#">Sidebar 01</a></li>
            <li><a href="#">Sidebar 02</a></li>
            <li ><a href="#">Sidebar 03</a></li>
            <li ><a href="#">Sidebar 04</a></li>
          </ul>
          
          
    </body>
    </html>
