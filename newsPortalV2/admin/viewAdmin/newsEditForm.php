<?php ob_start(); ?>

<div class="container" style="min-height:400px;">
    <div class="col-md-11">

        <h2>News Edit</h2>
        <?php
        if (isset($test)) {
            if ($test == true) {
        ?>
                <div class="alert alert-info">
                    <strong>Запись изменена. </strong>
                    <a href="newsAdmin"> Список новостей</a>
                </div>
            <?php
            } else if ($test == false) {
            ?>
                <div class="alert alert-warning">
                    <strong>Ошибка изменения записи!</strong>
                    <a href="newsAdmin"> Список новостей</a>
                </div>
            <?php
            }
        } else {
            ?>
            <form method="POST" action="newsEditResult?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>News title</td>
                        <td>
                            <input type="text" name="title" class="form-control" required value="<?php echo $detail['title']; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>News text</td>
                        <td>
                            <textarea rows="5" name="text" class="form-control" required><?php echo $detail['text']; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Category</td>
                        <td>
                            <select name="idCategory" class="form-control">
                                <?php
                                foreach ($arr as $row) {
                                    echo '<option value="' . $row['id'] . '"';
                                    if ($row['id'] == $detail['category_id']) echo 'selected';
                                    echo '>' . $row['name'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <!-- Image -->
                    <tr>
                        <td>Old Picture</td>
                        <td>
                            <div>
                                <!-- <img src="../images/<?php //echo $detail['picture']; 
                                                            ?>" width=150> -->
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($detail['picture']) . '" />'; ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>New Picture</td>
                        <td>
                            <div>
                                <input type="file" name="picture" style="color:black;">
                            </div>
                        </td>
                    </tr>
                    <!-- End image -->

                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="save">
                                <span class="glyphicon glyphicon-edit"></span> Изменить
                            </button>
                            <a href="newsAdmin" class="btn btn-large btn-success">
                                <i class="glyphicon glyphicon-backward"></i> &nbsp;Назад к списку
                            </a>
                        </td>
                    </tr>

                </table>
            </form>
        <?php
        }
        ?>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include "viewAdmin/templates/layout.php"; ?>