<?php


return Pimcore\Model\DataObject\Objectbrick\Definition::__set_state(array(
   'classDefinitions' => 
  array (
    0 => 
    array (
      'classname' => 'Car',
      'fieldname' => 'saleInformation',
    ),
    1 => 
    array (
      'classname' => 'AccessoryPart',
      'fieldname' => 'saleInformation',
    ),
  ),
   'dao' => NULL,
   'key' => 'SaleInformation',
   'parentClass' => '',
   'implementsInterfaces' => NULL,
   'title' => '',
   'group' => '',
   'layoutDefinitions' => 
  Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
     'fieldtype' => 'panel',
     'layout' => NULL,
     'border' => false,
     'name' => NULL,
     'type' => NULL,
     'region' => NULL,
     'title' => NULL,
     'width' => NULL,
     'height' => NULL,
     'collapsible' => false,
     'collapsed' => false,
     'bodyStyle' => NULL,
     'datatype' => 'layout',
     'permissions' => NULL,
     'children' => 
    array (
      0 => 
      Pimcore\Model\DataObject\ClassDefinition\Layout\Panel::__set_state(array(
         'fieldtype' => 'panel',
         'layout' => NULL,
         'border' => false,
         'name' => 'Layout',
         'type' => NULL,
         'region' => NULL,
         'title' => '',
         'width' => NULL,
         'height' => NULL,
         'collapsible' => false,
         'collapsed' => false,
         'bodyStyle' => '',
         'datatype' => 'layout',
         'permissions' => NULL,
         'children' => 
        array (
          0 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'fieldtype' => 'numeric',
             'width' => '',
             'defaultValue' => NULL,
             'integer' => false,
             'unsigned' => false,
             'minValue' => NULL,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => NULL,
             'decimalPrecision' => NULL,
             'name' => 'availabilityPieces',
             'title' => 'Availability Pieces',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          1 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'fieldtype' => 'select',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'couple-weeks',
                'value' => 'couple-weeks',
              ),
              1 => 
              array (
                'key' => 'couple-days',
                'value' => 'couple-days',
              ),
              2 => 
              array (
                'key' => 'instant',
                'value' => 'instant',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'name' => 'availabilityType',
             'title' => 'Availability Type',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          2 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Select::__set_state(array(
             'fieldtype' => 'select',
             'options' => 
            array (
              0 => 
              array (
                'key' => 'broken',
                'value' => 'broken',
              ),
              1 => 
              array (
                'key' => 'reworked',
                'value' => 'reworked',
              ),
              2 => 
              array (
                'key' => 'used',
                'value' => 'used',
              ),
              3 => 
              array (
                'key' => 'new',
                'value' => 'new',
              ),
            ),
             'width' => '',
             'defaultValue' => '',
             'optionsProviderClass' => '',
             'optionsProviderData' => '',
             'columnLength' => 190,
             'dynamicOptions' => false,
             'name' => 'condition',
             'title' => 'Condition',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          3 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\Numeric::__set_state(array(
             'fieldtype' => 'numeric',
             'width' => '',
             'defaultValue' => NULL,
             'integer' => false,
             'unsigned' => false,
             'minValue' => 0,
             'maxValue' => NULL,
             'unique' => false,
             'decimalSize' => 10,
             'decimalPrecision' => 2,
             'name' => 'priceInEUR',
             'title' => 'Price in EUR',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
          4 => 
          Pimcore\Model\DataObject\ClassDefinition\Data\QuantityValue::__set_state(array(
             'fieldtype' => 'quantityValue',
             'width' => NULL,
             'unitWidth' => NULL,
             'defaultValue' => NULL,
             'defaultUnit' => '7',
             'validUnits' => 
            array (
              0 => '8',
              1 => '7',
            ),
             'decimalPrecision' => NULL,
             'autoConvert' => false,
             'name' => 'milage',
             'title' => 'Milage',
             'tooltip' => '',
             'mandatory' => false,
             'noteditable' => false,
             'index' => false,
             'locked' => false,
             'style' => '',
             'permissions' => NULL,
             'datatype' => 'data',
             'relationType' => false,
             'invisible' => false,
             'visibleGridView' => false,
             'visibleSearch' => false,
             'blockedVarsForExport' => 
            array (
            ),
             'defaultValueGenerator' => '',
          )),
        ),
         'locked' => false,
         'blockedVarsForExport' => 
        array (
        ),
         'icon' => NULL,
         'labelWidth' => 100,
         'labelAlign' => 'left',
      )),
    ),
     'locked' => false,
     'blockedVarsForExport' => 
    array (
    ),
     'icon' => NULL,
     'labelWidth' => 100,
     'labelAlign' => 'left',
  )),
   'generateTypeDeclarations' => true,
   'blockedVarsForExport' => 
  array (
  ),
));
