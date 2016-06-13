
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">

            <main class="content col-md-8">

                <form id="form">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Название файла</label>
                        <input type="text" name="fio" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="text">Текст</label>
                        <textarea name="text" class="form-control" id="text"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>

                <form id="form">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Название файла</label>
                        <input type="text" name="fio" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="text">Выбор файла</label>
                        <input type="file" name="image" id="image" />
                    </div>
                    <button type="submit" class="btn btn-default">Отправить</button>
                </form>

                <hr>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
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

