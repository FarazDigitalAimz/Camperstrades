<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Condition</th>

        </tr>
        </thead>
        <tbody>
        <?php if($adds): ?>
            <?php
            $i=1;
            foreach($adds as $add): ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $add['condition']; ?></td>

                </tr>
            <?php $i++;endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>

    <!-- pagination blcok -->
    <div class="mt-3">
        <?php if ($pager) :?>
            <?php $pagi_path='camperstraders_front/adds';
            $pager->setPath($pagi_path);
            ?>

            <?= $pager->links() ?>
        <?php endif ?>
    </div>
</div>