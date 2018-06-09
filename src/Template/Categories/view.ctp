<?php $this->assign('title', 'Tienda Inacap - ' . $category['name']) ?>
<div class="row">

  <div class="col-lg-3">
    <h1 class="my-4 d-none d-md-block">Categorías</h1>
    <div class="list-group">
      <?php foreach ($categories as $cat) {
        echo $this->Html->link(
          $cat['name'],
          ['controller' => 'Categories', 'action' => 'view', $cat['id'], $cat['slug']],
          ['class' => 'list-group-item' . ($category['id'] == $cat['id'] ? ' selected' : '')]
        );
      }
      ?>
    </div>

  </div>
  <!-- /.col-lg-3 -->

  <div class="col-lg-9">
    <br/>
    <div class="row">
      <?php if (count($items) == 0) : ?>
        <p>No hay productos en esta categoria</p>
      <?php endif; ?>
      <?php foreach ($items as $item) : ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Item One</a>
              </h4>
              <h5>$24.99</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.col-lg-9 -->

</div>
<!-- /.row -->
