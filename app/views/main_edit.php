<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">


            <main class="content col-md-8">
                <h3><?= $data->title ?></h3>

                <? if (isset($data->result_status) && $data->result_status == 1) { ?>

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $data->result_text ?>
                        </div>

                <? } elseif (isset($data->result_status) && $data->result_status == 0) { ?>

                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $data->result_text ?>
                    </div>

                <? } ?>

                <div class="alert alert-warning">

                    <form role="form" action="<?= $_SERVER['REQUEST_URI']?>" method="post" >
                        <input type="hidden" name="" value=""> 
                        <div class="row">

                            <div class="col-md-12">
                                <label>Текст</label><br>
                                <textarea name="text" style="width: 100%; height: 100px;"><?= $data->text ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>

                        </div>

                    </form>

                </div>

            </main>

        </div>

</div>
</div>

