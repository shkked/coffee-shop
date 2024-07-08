<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="/" class="card-subtitle mb-2 text-body-secondary amiko-font text-decoration-none">Главная</a>
      </li>
      <?php
      foreach($pagetitle as $index => $key):
      ?>
      <li class="breadcrumb-item active" aria-current="page">
          <a 
              href="<?= $pageurl[$index]; ?>"
              style="cursor: pointer; word-break: break-word;"
              class="card-subtitle mb-2 text-body-secondary amiko-font <?php echo $index == count($pagetitle) - 1 ? 'text-decoration-underline' : 'text-decoration-none'  ?>"
          >
              <?= $key ?>
          </a>
      </li>
      <?php
      endforeach;
      ?>
    </ol>
  </nav>

</div>