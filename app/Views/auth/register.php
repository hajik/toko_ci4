<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <?php
        $username = [
            'name' => 'username',
            'id' => 'username',
            'value' => null,
            'class' => 'form-control',
        ];

        $password = [
            'name' => 'password',
            'id' => 'password',
            'class' => 'form-control',
        ];

        $repeatPassword = [
            'name' => 'repeatPassword',
            'id' => 'repeatPassword',
            'class' => 'form-control',
        ];

        $session = session();
		$errors = $session->getFlashdata('errors');
    ?>
    <div class="row justify-content-center">    
        <div class="col-6 ">
        <h1>Register Form</h1>
        <?php if($errors != null): ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Terjadi Kesalahan</h4>
                <hr>
                <p class="mb-0">
                    <?php
                        foreach($errors as $err){
                            echo $err.'<br>';
                        }
                    ?>
                </p>
            </div>
        <?php endif ?>
        <?= form_open('Auth/register') ?>
            <div class="form-group">
                <?= form_label("Username", "username")?>
                <?= form_input($username) ?>
            </div>
            <div class="form-group">
                <?= form_label("Password", "password")?>
                <?= form_password($password) ?>
            </div>
            <div class="form-group">
                <?= form_label("Repeat Password", "repeatPassword")?>
                <?= form_password($repeatPassword) ?>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary mt-2']) ?>
            </div>
        <?= form_close() ?>
        </div>
    </div>
<?= $this->endSection() ?>