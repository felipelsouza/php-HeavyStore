<?php 
    $con = dbConnection();
    $res = mysqli_query($con, 'SELECT * FROM albumslist');
?>

<div class="page-header">
    <h3>Albums</h3>
</div>
<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Albums List</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter">
                    <span class="glyphicon glyphicon-filter"></span>
                </button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Band" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Release Date" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Price" disabled></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($res as $album) { ?>
                    <tr>
                        <td><?php echo $album['id']; ?></td>
                        <td><?php echo $album['albumName']; ?></td>
                        <td><?php echo $album['band']; ?></td>
                        <td><?php echo $album['releaseDate']; ?></td>
                        <td><?php echo $album['price']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <a href="?page=addNewAlbum">
        <button class="btn btn-primary">New Album</button>
    </a>
</div>