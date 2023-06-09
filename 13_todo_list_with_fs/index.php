<?php
//showing the todos from json file
$todoArray = [];
if (file_exists('todo.json')) {
    # code...
    $todo = file_get_contents('todo.json');
    $todoArray = json_decode($todo, true);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="newTodo.php" method="post">
        <input type="text" name="todo_name" placeholder="Enter your todo">
        <button>New Todo</button>
    </form>

    <?php foreach ($todoArray as $todoName => $todo) { ?>
        <div>
            <form action="change_status.php" method="post" style="display: inline-block;">
                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                <input type="checkbox" <?php echo $todo['completed'] ? 'ckecked' : '' ?>>
            </form>
            <?php echo $todoName ?>
            <form style="display: inline;" action="delete.php" method="post">
                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                <button>Delete</button>
            </form>

        </div>
    <?php } ?>

    <script>
        const checkboxes = document.querySelectorAll('input[type=checkbox]');
        checkboxes.forEach(ch => {
            ch.onclick = function() {
                this.parentNode.submit();
            };
        })
    </script>

</body>

</html>