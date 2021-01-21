<h1>Cadastrar Usuário</h1>
    
    
    
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Cadastro') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('cpf');
            echo $this->Form->control('data_nascimento');
            echo $this->Form->control('email');
            echo $this->Form->control('telefone');
            echo $this->Form->control('endereco');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
            ?>

<!-- Nessa parte do codigo tentei fazer as caixas de seleção para cidade e estado
     Mais nao conseguia fazer o cadastro no final acusava erro  -->



        <!--<form method="POST" action = $result_post>
            <?php //include_once("conexao.php");?>
        <label>Estados</label>
        <select name="id_categoria" id="id_categoria">
        <option value="">Escolha o Estado</option>
        <?php
        //$result_cat_post = "SELECT * FROM estados ORDER BY nome";
        //$resultado_cat_post = mysqli_query($conn, $result_cat_post);
        //while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post)){
            //echo '<option value="'.$row_cat_post['cod_estados'].'">'.$row_cat_post['nome'].'</option>';
        //}
        ?>
        </select>
        </Form>

        <label>Cidade</label>
        <span class="carregando"> Aguarde, carregando... </span>
        <select name="id_cidades" id="id_cidades">
            <option value="">Escolha a cidade</option>
            <?php 
            //$result_sub_cat = "SELECT * FROM cidades ORDER BY nome";
            //$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
             //while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat)) {
                    //echo '<option value="'.$row_sub_cat['cod_cidades'].'">'.$row_sub_cat['nome'].'</option>';
        //} 
            ?>
        </select>

        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("jquery", "1.4.2");
        </script>

        <script type="text/javascript">
        $(function(){
            $('#id_categoria').change(function(){
                if( $(this).val() ){
                    $('#id_cidades').hide();
                    $('.carregando').show();
                    $.getJSON('sub_cidade_post.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
                        var options = '<option value="">cidade</option>';
                        for (var i = 0; i < j.lenght; i++){
                            options += '<option value="' + j[i].estados_cod_estados + '">' + j[i].nome +'</option>';
                        }
                        $('#id_cidades').html(options).show();
                        $('carregando').hide();
                    });
                }else{
                    $('#id_cidades').html('<option value="">cidades</option>');
                }
            });
        }); 
       </script>-->




    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>

