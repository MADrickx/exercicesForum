<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/screen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo SITENAME ?></title>
</head>
<body>
    <?php require ('../app/views/includes/header.php');?>
    <main>
        <section class="components__form">
            <h1>Update  topic</h1>
            <form 
            action="<?php echo URLROOT; ?>/posts/update/<?php echo $data['post']->id ?>" method="POST">
                <label for="title">Title of the topic:</label>
                <input 
                    type="text" 
                    name="title" 
                    id="name" 
                    value="<?php echo $data['post']->title?>">
                <br>
                <span class="invalidFeedback">
                    <?php echo $data['titleError'] ?>
                </span>
                <br>
                <label for="body">Content of the topic:</label>
                <br>
                <textarea 
                name="body" id="body" placeholder="Write here the body of your post..."><?php echo $data['post']->body ?></textarea>
                <br>
                <span class="invalidFeedback">
                    <?php echo $data['bodyError'] ?>
                </span>
                <br>
                <button name="submit" type="submit">Submit topic</button>
            </form>
        </section>
        <?php require ('../app/views/includes/aside.php');?>
    </main>
    <?php require ('../app/views/includes/footer.php');?>
</body>
</body>
</html>
