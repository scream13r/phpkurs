<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">


            <main class="content col-md-8">
                <h3>Загрузка файла</h3>

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

                    <form role="form" action="/upload/" method="post" enctype=multipart/form-data>

                        <div class="row">

                            <div class="col-md-4">
                                <label>Имя файла</label>
                                <input type="text" name="file_name" class="form-control" placeholder="Название файла">
                            </div>

                            <div class="col-md-4">
                                <label>Ваш файл</label>
                                <input type="file" name="file">
                            </div>

                            <div class="col-md-4 text-right">
                                <br>
                                <button type="submit" class="btn btn-default">Отправить</button>
                            </div>

                        </div>

                    </form>

                </div>

                <h3><?= $data->title ?></h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    <? foreach ($data->arrFiles as $i => $file) {
                        $i++; ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><a href="/view/<?= $file ?>"><?= $file ?></a></td>
                            <td>
                                <a href="/download/<?= $file ?>"><span class="glyphicon glyphicon-download-alt"></span></a>
                                <a href="/edit/<?= $file ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="/delete/<?= $file ?>"><span class="glyphicon glyphicon-trash"></a></span>
                            </td>
                        </tr>
                    <? } ?>
                    </tbody>
                </table>

            </main>

        </div>

</div>

