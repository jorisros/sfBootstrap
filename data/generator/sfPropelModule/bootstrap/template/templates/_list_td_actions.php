<td>
  <div class="btn-group" role="group" aria-label="">
<?php foreach ($this->configuration->getValue('list.object_actions') as $name => $params): ?>
<?php if ('_delete' == $name): ?>
    <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-label="Left Align"></span></a>
    <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToDelete($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php elseif ('_edit' == $name): ?>
    <?php //$params['label'] = 'joris' ?>
    <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToEdit($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>
    <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-wrench" aria-hidden="Center Align"></span></a>
<?php elseif ('_move_up' == $name): ?>
    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToMoveUp($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php elseif ('_result' == $name): ?>
    <?php //echo $this->addCredentialCondition('[?php echo $helper->linkToMoveUp($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>
  <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-stats" aria-hidden="Center Align"></span></a>
<?php elseif ('_move_down' == $name): ?>
    <?php echo $this->addCredentialCondition('[?php echo $helper->linkToMoveDown($'.$this->getSingularName().', '.$this->asPhp($params).') ?]', $params) ?>

<?php else: ?>
    <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-<?php echo str_replace('_', '',strtolower($name)) ?>" aria-hidden="Center Align"></span></a>
      <?php //echo $this->addCredentialCondition($this->getLinkToAction($name, $params, true), $params) ?>


<?php endif; ?>
<?php endforeach; ?>
  </div>
</td>
