<ul class="breadcrumb">
    <li>
        <?php echo link_to('Liste des zones', 'zone') ?><span class="divider">></span>
    </li>
    <li class="active">
        Modifier la zone <?php echo strtolower($form->getObject('name')) ?>
    </li>
</ul>
<div class="page-header">
    <h1>Modifier la zone <?php echo strtolower($form->getObject('name')) ?></h1>
</div>

<?php include_partial('form', array('form' => $form)) ?>
