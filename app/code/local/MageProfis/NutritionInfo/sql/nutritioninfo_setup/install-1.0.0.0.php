<?php
/* @var MageProfis_ChildrenCategories_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();
$installer->addAttribute('catalog_product', 'kilojoule', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'Kilojoule',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'calories', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'kCal',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'fat', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'Fett',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'fatty_acids', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'davon ges. Fettsäuren',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'carbohydrates', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'Kohlenhydrate',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'sugar', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'davon Zucker',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'protein', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'Eiweiß',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->addAttribute('catalog_product', 'salt', array(
    'group'                         => 'Nährwertangaben',
    'label'                         => 'Salz',
    'type'                          => 'text',
    'input'                         => 'text',
    'visible'                       => true,
    'required'                      => false,
    'user_defined'                  => true,
    'searchable'                    => false,
    'filterable'                    => false,
    'comparable'                    => false,
    'visible_on_front'              => true,
    'visible_in_advanced_search'    => false,
    'unique'                        => false,
    'global'                        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'used_in_product_listing'       => 1,
));

$installer->endSetup();