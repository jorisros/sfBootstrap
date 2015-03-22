<div class="container">
[?php if ($sf_user->hasFlash('notice')): ?]
    <div class="alert alert-warning" role="alert">
        <div class="notice"><span class="glyphicon glyphicon-exclamation-sign">&nbsp;[?php echo __($sf_user->getFlash('notice'), array(), 'sf_admin') ?]</div>
    </div>
 [?php endif; ?]

[?php if ($sf_user->hasFlash('error')): ?]
    <div class="alert alert-danger" role="alert">
        <div class="error"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;[?php echo __($sf_user->getFlash('error'), array(), 'sf_admin') ?]</div>
    </div>
[?php endif; ?]
</div>
