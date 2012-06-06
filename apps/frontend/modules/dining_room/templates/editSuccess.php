<ul class="breadcrumb">
    <li>
        <?php echo link_to('Liste des zones', 'zone') ?><span class="divider">></span>
    </li>
    <li>
        <?php echo link_to('Salles de la zone '.strtolower($zone->getName()), 'zone_show', $zone) ?><span class="divider">></span>
    </li>
    <li class="active">
        Modifier la salle <?php echo strtolower($dining_room->getName()) ?>
    </li>
</ul>

<div class="page-header">
    <h1>Modifier la salle <?php echo strtolower($form->getObject('name')) ?></h1>
</div>

<?php include_partial('form', array('form' => $form, 'dining_room' => $dining_room, 'zone' => $zone)) ?>
