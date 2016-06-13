<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">


            <main class="content col-md-8">
                <h3>Создание файла</h3>

                <? if (isset($data->upload_status) && $data->upload_status == 1) { ?>

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $data->upload_text ?>
                        </div>

                <? } elseif (isset($data->upload_status) && $data->upload_status == 0) { ?>

                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $data->upload_text ?>
                    </div>

                <? } ?>

                <div class="alert alert-warning">

                    <form role="form" action="/create/" method="post" >

                        <div class="row">

                            <div class="col-md-12">
                                <label>Имя файла</label>
                                <input type="text" name="file_name" class="form-control" placeholder="Название файла">
                            </div><br>

                            <div class="col-md-12">
                                <label>Текст</label><br>
                                <textarea name="text" style="width: 100%; height: 100px;"></textarea>
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

