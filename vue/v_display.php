<div class="col-6">
    <!-- Tableau -->
    <table class='table table-bordered border-primary'>
        <tr class='fw-bold'>
            <td>Nom et Prénom</td>
            <td>Email</td>
            <td>Message</td>

            <?php
            foreach ($someData as $aData) {
                $nomPrenom = $aData['nom_prenom'];
                $email = $aData['email'];
                $message = $aData['message'];
                ?>

            <tr>
                <td>
                    <?= $nomPrenom ?>
                </td>
                <td>
                    <?= $email ?>
                </td>
                <td>
                    <?= $message ?>
                </td>
                <?php
            }
            ?>
</div>
</div>
</div>
