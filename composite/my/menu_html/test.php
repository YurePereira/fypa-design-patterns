<?php
/**
 * 
 * @author Francisco Yure Pereira de Araujo <franciscoyurep@gmail.com>
 * @since 2014-04-21 
 * 
 */
require_once 'IComponentMenu.class.php';
require_once 'Menu.class.php';
require_once 'SubMenu.class.php';
require_once 'Item.class.php';

$menu = new Menu();
$subMenu = new SubMenu();
$subMenu2 = new SubMenu();

$item1 = new Item( '#link-item1', 'Item 1' );
$item2 = new Item( '#link-item2', 'Item 2' );
$item3 = new Item( '#link-item3', 'Item 3' );
$item4 = new Item( '#link-item4', 'Item 4' );

$menu->addChild( $item1 );
$menu->addChild( $item2 );
$menu->addChild( $item3 );
$menu->addChild( $item4 );

$subMenu2->addChild( $item1 );
$subMenu2->addChild( $item2 );
$subMenu2->addChild( $item3 );
$subMenu2->addChild( $item4 );

$subMenu->addChild( $item1 );
$subMenu->addChild( $item2 );
$subMenu->addChild( $subMenu2 );
$subMenu->addChild( $item3 );

$menu->addChild( $subMenu );

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Design Patterns Composit</title>
</head>
<body>
	<?php
		echo $menu->render();
	?>	
</body>
</html>