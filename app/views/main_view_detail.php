                    <?=$file_id?>
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">

            <main class="content col-md-8">
              <h3><?=$data->title?></h3>

                  <table class="table table-striped">

                    <thead>
                    <tr>
                         <? foreach ($data->table['col'] as $i => $col) {?>
                         <th><?=$col?></th>
                          <? } ?>
                    </tr>
                    </thead>

                    <tbody>
                            <? foreach ($data->table['value'] as $k => $value) {?>
                              <tr>

                                <? foreach ($data->table['col'] as $i => $col) {?>
                                         <td>
                                        <? switch ($col) {
                                                case 'id_order':
                                                    echo '<a href="/view/orders">'. $data->table['value'][$k][$col] .'</a>';
                                                    break;
                                               case 'id_product':
                                                    echo '<a href="/view/products">'. $data->table['value'][$k][$col] .'</a>';
                                                    break;
                                               case 'id_user':
                                                    echo '<a href="/view/users">'. $data->table['value'][$k][$col] .'</a>';
                                                    break;
                                               case 'id_catalog':
                                                    echo '<a href="/view/category">'. $data->table['value'][$k][$col] .'</a>';
                                                    break;
                                               default:
                                                    echo $data->table['value'][$k][$col];
                                                    break;
                                            }
                                        ?>
                                       </td>
                                <? } ?>
                                </tr>
                      <? } ?>

                    </tbody>
                </table>
            </main>
        </div>
    </div>

</div>

