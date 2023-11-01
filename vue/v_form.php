<div class='container pt-5'>
    <div class="row">
        <div class="col-6">
            <!-- Formulaire -->
            <form method='post' action='index.php?action=newUser'>
                <p>
                    <label for='nomPrenom'>Nom et Prénom</label>
                    </br>
                    <input type='text' name='nomPrenom' id='nomPrenom'></input>
                </p>
                <p>
                    <label for='Email'>Email</label>
                    </br>
                    <input type='email' name='email' id='email'></input>
                </p>
                <p>
                    <label for='Message'>Message</label>
                    </br>
                    <input type='text' name='message' id='message'></input>
                </p>
                <p>
                    <input type="submit" value="Valider" name="valider">
                </p>
            </form>
        </div>