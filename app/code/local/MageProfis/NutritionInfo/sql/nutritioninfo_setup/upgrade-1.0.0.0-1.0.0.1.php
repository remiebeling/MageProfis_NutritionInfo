<?php
/* @var MageProfis_ChildrenCategories_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();
$installer->updateAttribute(
        'catalog_product', 
        'kilojoule',
        'is_visible_on_front',
        0
);

$installer->updateAttribute(
        'catalog_product', 
        'calories',
        'is_visible_on_front',
        0
);

$installer->updateAttribute(
        'catalog_product', 
        'fat',
        'is_visible_on_front',
        0
);

$installer->updateAttribute(
        'catalog_product', 
        'fatty_acids',
        'is_visible_on_front',
        f0
);

$installer->updateAttribute(
        'catalog_product', 
        'carbohydrates',
        'is_visible_on_front',
        0
);

$installer->updateAttribute(
        'catalog_product', 
        'sugar',
        'is_visible_on_front',
        0
);

$installer->updateAttribute(
        'catalog_product', 
        'protein',
        'is_visible_on_front',
        0
);

$installer->updateAttribute(
        'catalog_product', 
        'salt',
        'is_visible_on_front',
        0
);

$installer->endSetup();