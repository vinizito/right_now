<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main_container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="card">
        <div class="card-header">
          <h2>Pedido # <?= $entrega['id']?></h2>
        </div>
        <div class="card-body">
          <p>Quantidade de Itens: <?= $entrega['itens']?></p>
          <p>Distância da entrega: <?= $entrega['distancia']?> km</p>
          <p>Melhor modal: <?= $entrega['melhor_modal']?></p>
          <p>Melhor trajeto: <?= $entrega['melhor_rota']?></p>
          <p>Endereço: <?= $entrega['endereco']?></p>
          <p>Local da entrega</p>
          <img src="<?= base_url('')?>public/img/<?= $entrega['img_local']?>" alt="Casa X - Entrega compras" class="img-fluid" width="450" height="450">
        </div>
      </div>
    </div>
</main>