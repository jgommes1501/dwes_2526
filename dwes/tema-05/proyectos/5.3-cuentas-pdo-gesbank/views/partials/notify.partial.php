<?php if (isset($notify)) : ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>NOTIFICACIÓN: </strong> <?= $notify ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
