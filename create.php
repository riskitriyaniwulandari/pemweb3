<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (!empty($_POST)) {
    
    $NIM= isset($_POST['NIM']) && !empty($_POST['NIM']) && $_POST['NIM'] != 'auto' ? $_POST['NIM'] : NULL;
    $Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
    $fakultas = isset($_POST['fakultas']) ? $_POST['fakultas'] : '';
    $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
    $stmt = $pdo->prepare('INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$NIM, $Nama, $email, $jurusan, $fakultas, $gambar]);
    $msg = 'Created Successfully!';
}

?>

<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="NIM">NIM</label>
        <label for="Nama">Nama</label>
        <input type="text" name="NIM" value="" NIM="NIM">
        <input type="text" name="Nama" NIM="Nama">
        <label for="email">Email</label>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="email" NIM="email">
        <input type="text" name="jurusan" NIM="jurusan">
        <label for="fakultas">Fakultas</label>
        <label for="gambar">Gambar</label>
        <input type="text" name="fakultas" NIM="fakultas">
        <input type="file" name="gambar" size="50"/>
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>