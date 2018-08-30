  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="height: 570px;">
    <!-- Main content -->
    <section class="content">
      <!-- Container dos itens lançadas e dos itens disponíveis -->
      <div class="row pdv no-gutters">
        <!-- Coluna esquerda -->
        <div class="col-lg-5">
          <!-- Painel dos itens lançados -->
          <div class="pdv_comanda">
            <form action="">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Cliente">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Número da comanda">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Código, nome ou código de barras">
              </div>
            </form>
            <div class="table-responsive">
              <table class="table table-striped table-condensed table-hover">
                <thead>
                  <tr>
                    <th class="text-center">QTDE</th>
                    <th class="text-center">
                      PRODUTO <span class="badge">Código</span>
                    </th>
                    <th class="text-center">PREÇO</th>
                    <th class="text-center">SUB-TOTAL</th>
                    <th class="text-center"><i class="fa fa-trash-o"></i></th>
                  </tr>
                </thead>
                <tbody>                                            
                  <tr>
                    <td>
                      <input type="text" value="2" maxlength="4" size="2" class="form-control input-sm" name="" id="" style="text-align: center; font-weight: bold;">
                    </td>
                    <td>
                      <button class="btn btn-warning btn-xs">Esfirra de Carne <span class="badge">106</span></button>
                      <?= br(); ?>
                      <span class="h6">* sem cebola</span>
                    </td>
                    <td>3.50</td>
                    <td>7.00</td>
                    <td><i class="fa fa-trash-o"></i></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" value="3" maxlength="4" size="2" class="form-control input-sm" style="text-align: center; font-weight: bold">
                    </td>
                    <td>
                      <button class="btn btn-warning btn-xs">Coxinha de Frango <span class="badge">103</span></button>
                    </td>
                    <td>3.50</td>
                    <td>10.50</td>
                    <td><i class="fa fa-trash-o"></i></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="text" value="1" maxlength="4" size="2" class="form-control input-sm" style="text-align: center; font-weight: bold">
                    </td>
                    <td>
                      <button class="btn btn-warning btn-xs">Espetinho de Frango <span class="badge">102</span></button>
                    </td>
                    <td>5.00</td>
                    <td>5.00</td>
                    <td><i class="fa fa-trash-o"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>  
        </div>
        <!-- /.col-md-5 -->
        <!-- Coluna Direita -->
        <div class="col-lg-7">
          <!-- Painel dos itens disponíveis -->
          <div class="pdv_produtos scrollbar-macosx">
            <?php
              $total_itens = count($produtos); //total de produdos que encomendável =true
              $linhas = ceil($total_itens / 4); //número de colunas, não mudar - ceil = arredondar pra cima
              $conta = 1;
              for($l = 1; $l <= $linhas; $l++){
            ?>
              <div class="row no-gutters">
                <?php
                  for($c = 1; $c <= 4; $c++){
                    if ($conta > $total_itens)
                      break;
                ?>
                <div class="col-lg-3">
                  <div class="panel panel-default item_add_comanda" data-id_item="<?= $produtos[$conta-1]->id ?>">
                    <div class="panel-heading">
                      <h3 class="panel-title text-center text-nowrap <?= strlen($produtos[$conta-1]->nome) > 20 ? 'marquee' : ''; ?>"><?= $produtos[$conta-1]->nome; ?></h3>
                    </div>
                  <div class="panel-body no-padding">
                    <?php
                      $img_prop = array(
                        'src'   =>  base_url('app/views/assets/img/sem_imagem.png'),
                        'alt'   => 'Detalhes do item ' . $conta,
                        'class' => 'img-responsive',
                        'width' => '100%',
                        'height'=> '100%',
                        'title' => 'Descrição'
                      );
                      echo img($img_prop);
                    ?>
                  </div>
                    <div class="panel-footer text-center">
                      <?= $produtos[$conta-1]->codigo.' - '.dinheiro($produtos[$conta-1]->preco) ?>
                    </div>
                  </div>
                </div>
                <?php
                  $conta++;
                  }
                  echo "</div>";
                  }
                ?>
              </div>
            </div> 
            <!-- /.pdv_produtos -->
          </div>
          <!-- /.col-md-7 -->
        </div>
        <!-- /.pdv -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.-wrapper -->
