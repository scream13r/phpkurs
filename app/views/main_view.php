
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">

            <main class="content col-md-8">
              <h3><?=$data->title?></h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>

                   <? foreach ($data->arrFiles as $i=>$file) { $i++;?>
                   <tr>
                        <th scope="row"><?=$i?></th>
                        <td><a href="view/<?=$file?>"><?=$file?></a></td>
                        <td>
                            <a href="download/<?=$file?>"><span class="glyphicon glyphicon-download-alt"></a></span>
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

    <div class="modal fade bs-example-modal-sm" id="success" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                Спасибо, ваш заказ принят!!
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-sm" id="error" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                Что то пошло не так, попробуйте позже
            </div>
        </div>
    </div>


</div>

