<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <h1>Hello World</h1>
    <h2><?php echo session()->get('username'); ?></h2>
<?= $this->endSection() ?>