<h3><?= $data['title'] ?></h3>
<a href="<?= URLROOT ?>/mankementen/create">Mankement Toevoegen</a>
<table>
    <thead>
        <th>Naam Instructeur</th>
        <th>E-mailadres</th>
        <th>Kenteken auto</th>
        <th>Datum</th>
        <th>Mankement</th>
        <th>Update</th>
        <th>Delete</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>
<p><a href="<?= URLROOT; ?>/landingpages/index">back to landingpage</a></p>