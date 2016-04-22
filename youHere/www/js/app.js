$( document ).ready(function() {
                    var $server;
                    $server = 'http://localhost/scripts-YouHere/';
 //criar nova conta        
                    $('#criarConta').on('click', function(){
                        $nome = $('#nome').val();
                        $email = $('#email').val();
                        $senha = $('#senha').val();
                        $localizacao = $('#localizacao').val();
                       
                        $.ajax({
                            type: "get",
                             //dataType  : 'json',
                            url: $server+"/criarConta.php",
                            data: "nome="+$nome+"&email="+$email+"&senha="+$senha+"&localizacao="+$localizacao+"&acao=criarConta",
                            success: function(data) {
                               location.href = "view/criarPerfil.html";
                               
                            }
                        });
                    });
    
    //logar no sistema
           $('#logar').on('click', function(){
                       
                        $loginEmail = $('#loginEmail').val();
                        $loginSenha = $('#loginSenha').val();
                      
                       
                        $.ajax({
                               type: "get",
                               dataType  : 'json',
                               url: $server+"/analisaLogin.php",
                               data: "loginEmail="+$loginEmail+"&loginSenha="+$loginSenha+"&acao=analisaLogin",
                            
                             success: function(data) {
                                 var situacao = "";
                                 var id = "";
                                 situacao += data[0].situacao;
                                 id += data[0].id;
                                 
                                 if(situacao == 'logado'){
                                    analisaPerfil(id);
                                 }
                            }
     
                          
                        });
                    });
    //verifica se o peril foi criado
                        function analisaPerfil($id){
                           
                                    
                        $.ajax({
                               type: "get",
                               dataType  : 'json',
                               url: $server+"/analisaPerfil.php",
                               data: "id="+$id+"&acao=analisaPerfil",
                            
                             success: function(data) {
                                var situacao = "";
                                
                                situacao += data[0].situacao;
                                 
                                 
                                if(situacao == 'nao'){
                                 location.href = "view/criarPerfil.html";
                                }
                                 else{
                                     location.href = "view/eventos.html";
                                 }
                            }
                    
             
                        });
     
     
                       }
    
     //criar novo Perfil       
                    $('#criarPerfil').on('click', function(){
                        $imagem = $('#imagem').val();
                        $talento = $('#talento').val();
                        $descricao = $('#descricao').val();
                        $palavras = $('#palavras').val();
                        
                       //falta passar o id
                        $.ajax({
                            type: "get",
                            dataType  : 'json',
                            url: $server+"/criarPerfil.php",
                            data: "imagem="+$imagem+"&id="+$id+"&talento="+$talento+"&descricao="+$descricao+"&palavras="+$palavras+"&acao=criarPerfil",
                            success: function(data) {
                               location.href = "view/eventos.html";
                               
                            }
                        });
                    });

            });
