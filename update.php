<?php

include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
if (isset($_GET['NIM'])) {
    if (!empty($_POST)) {
        $NIM = isset($_POST['NIM']) ? $_POST['NIM'] : NULL;
        $Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : '';
        $fakultas = isset($_POST['fakultas']) ? $_POST['fakultas'] : '';
        $gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE mahasiswa SET NIM = ?, Nama = ?, email = ?, jurusan = ?, fakultas = ?, gambar = ? WHERE NIM = ?');
        $stmt->execute([$NIM, $Nama, $email, $jurusan, $fakultas, $gambar, $_GET['NIM']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM mahasiswa WHERE NIM = ?');
    $stmt->execute([$_GET['NIM']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that NIM!');
    }
} else {
    exit('No NIM specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['NIM']?></h2>
    <form action="update.php?NIM=<?=$contact['NIM']?>" method="post">
    <label for="NIM">NIM</label>
        <input type="text" name="NIM" value="<?=$contact['NIM']?>" id="NIM">

        <label for="Nama">Nama</label>
        <input type="text" name="Nama" value="<?=$contact['Nama']?>" id="Nama">

        <label for="email">Email</label>
        <input type="text" name="email" value="<?=$contact['email']?>" id="email">

        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" value="<?=$contact['jurusan']?>" id="jurusan">

        <label for="fakultas">Fakultas</label>
        <input type="text" name="fakultas" value="<?=$contact['fakultas']?>" id="fakultas">

        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" size="50" value="<?=$contact['gambar']?>" id="gambar"/>
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>