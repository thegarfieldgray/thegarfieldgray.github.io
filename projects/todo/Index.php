<?php
    
    require_once 'app/init.php';
    $itemsQuery = $db->prepare("
            SELECT id, name, done
            FROM items
            WHERE user = :user
        ");

    $itemsQuery -> execute([
        'user' => $_SESSION['user_id']]);

    $items = $itemsQuery->rowCount() ? $itemsQuery : [];
?>

<!DOCTYPE hmtl>
<html>
    <head>
        <meta charset="utf-8">
        <title>To Do List</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="main.css" rel="stylesheet">
        
        <meta name="viewport" content="width=device_width, inital_scale=1.0">
    </head>
    <body>
        <div class="list">
            <h1 class="header-head">To Do</h1>
            
        <?php if(!empty($items)): ?>
            <ul class="items">
              <?php foreach($items as $item): ?>
                <li>
                    <span class="items<?php echo $item['done'] ? 'done': '';?> "><?php echo $item['name']; ?></span>
                    <?php if(!$item['done']):; ?>
                    <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Mark as done.</a>
                    <?php endif; ?>

                     <?php if($item['done']):; ?>
                    <a href="mark.php?as=notdone&item=<?php echo $item['id']; ?>" class="notdone-button">NotDone.</a>
                    <?php endif; ?>

                </li>
              <?php endforeach;?>
            </ul>
        <?php else:; ?>
            <p>You have not added any items yet</p>
        <?php endif; ?>
            
            <form class="items-add" action="add.php" method="post">
            
                <input type="checkboxes" name="name" placeholder="Add new item here" class="input" autocomplete="off" required>
                <input type="submit" value="Add" class="submit">
            
            </form>
            
        </div>
    
    </body>

</html>