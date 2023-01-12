<h3><?= $data['title']; ?></h3>

<form action="<?= URLROOT; ?>/mankementen/create" method="post">
    <table>
        <tbody>
            <tr>
                <td>Kenteken:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><input type="text" name="capitalCity" id="capitalCity"></td>
            </tr>
            <tr>
                <td>Mankement:</td>
                <td><input type="text" name="continent" id="continent"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="Verstuur"></td>
            </tr>
        </tbody>
    </table>

</form>