<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main_container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
      <h2 class="h2 title-dashboard">Entregas</h2>
    </div>

    <div class="table-responsive">
      <table class="table table-hover" id="table">
        <thead>
          <tr>
            <th>Pedido N°</th>
            <th>Itens (qtde)</th>
            <th>Distância (Km)</th>
            <th>Melhor modal</th>
            <th>Melhor Rota</th>
            <th>Endereço</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($entregas as $entrega): ?> 
            <tr>
              <td><?= $entrega['id'] ?></td>
              <td><?= $entrega['itens']?></td>
              <td><?= $entrega['distancia']?></td>
              <td><?= $entrega['melhor_modal']?></td>
              <td><?= $entrega['melhor_rota']?></td>
              <td><?= $entrega['endereco']?></td>
              <td>
                <a href="<?= base_url('')?>dashboard/details/<?= $entrega['id']?>">
                  <button class="btn btn-success btn-sm">
                    Detalhes
                  </button>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
          
        </tbody>
      </table>
    </div>
  </main>
