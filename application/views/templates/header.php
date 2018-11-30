<html>
        <head>
                <title>JMC Inventory: <?php echo $title; ?></title>
                <?php echo link_tag('assets/css/default.css'); ?>
        </head>
        <body>
                <h1>JMC Inventory: <?php echo isset($title)?$title:'JMC Inventory'; ?></h1>
                <?php if (isset($menu)) { echo $menu; } ?>
                <?php echo isset($msg)?heading($msg,3,'class="message"'):''; ?>
