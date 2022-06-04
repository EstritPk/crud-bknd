<?php include("db.php") ?>
<?php include("includes/header.php") ?>

 <?php if(isset($_SESSION['messahe'])){ ?>
            <div class="alert aler-warning alert-dismissible fade show" role="alert">
            <?php $_SESSION['message'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php session_unset(); } ?>

<div class="container p-4">

        

    <div class="col-md-4">
        <div class="card card-body">
            <form action="save_task.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Task Title de pana siono qliao" autofocus>
                </div>
                <div class="form-group">
                    <textarea name="description" rows="2" class="form-control" placeholder="Task Description aja eje dejeve tu dejeve iioo"></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task, Mothafoka">
            </form>
        </div>
    </div>

    <div class="col-md-8">

    

    </div>
</div>









<?php include("includes/footer.php") ?>