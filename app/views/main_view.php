<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">


            <main class="content col-md-8">

                <? if (isset($data->status) && $data->status == 1) { ?>

                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <?= $data->status_text ?>
                        </div>

                <? } elseif (isset($data->status) && $data->status == 0) { ?>

                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?= $data->status_text ?>
                    </div>

                <? } ?>

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
                                <span class="glyphicon glyphicon-download-alt"></span>
                                <span class="glyphicon glyphicon-pencil"></span>
                               <span class="glyphicon glyphicon-trash"></span>
                            </td>
                        </tr>
                    <? } ?>
                    </tbody>
                </table>

            </main>

        </div>
    </div>
</div>

