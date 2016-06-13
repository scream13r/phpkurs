<h1>Портфолио</h1>
<div class="row">

<?php foreach ($data as $row): ?>
    <div class="col-md-4">
        <h2><?=$row['name']?></h2>
        <p><?=$row['year']?></p>
        <p><?=$row['description']?></p>
        <p><a class="btn btn-default" href="<?=$row['site']?>" role="button">Посмотреть »</a></p>
    </div>
<?php endforeach; ?>

</div>
