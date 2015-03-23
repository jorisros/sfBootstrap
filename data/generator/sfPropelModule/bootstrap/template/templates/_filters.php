[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]
<div class="container">
<form class="form-inline" action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter')) ?]" method="post">


  [?php if ($form->hasGlobalErrors()): ?]
    [?php echo $form->renderGlobalErrors() ?]
  [?php endif; ?]

            <div class="form-group">
            [?php echo $form->renderHiddenFields() ?]
              [?php //echo link_to(__('Reset', array(), array('class'=>'test')), '<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?]
            <input type="submit" class="btn btn-default" value="[?php echo __('Filter', array(), 'sf_admin') ?]" />
</div>
        [?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?]

        [?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?]
          [?php include_partial('<?php echo $this->getModuleName() ?>/filters_field', array(
            'name'       => $name,
            'attributes' => $field->getConfig('attributes', array()),
            'label'      => $field->getConfig('label'),
            'help'       => $field->getConfig('help'),
            'form'       => $form,
            'field'      => $field,
            'class'      => 'sf_admin_'.strtolower($field->getType()).' sf_admin_filter_field_'.$name,
          )) ?]

        [?php endforeach; ?]


</form>
</div>