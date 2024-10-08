<?= $this->extend('layout') ?>

<?= $this->section('title') ?>My CI Application<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Soal Test</h1>
<p><small>admin 2022-02-01 11:14:55</small></p>
<p><strong>Buatlah Blog seperti ini dalam WAKTU 2&nbsp;JAM dengan ketentuan :</strong></p>

<ol>
	<li>Menu :
	<ul>
		<li>Beranda</li>
		<li>Post : CRUD Post</li>
		<li>Akun : CRUD Akun</li>
		<li>Login / Logout</li>
	</ul>
	</li>
	<li>Terdapat 2 Role :
	<ul>
		<li>Admin dapat membuat Akun baru dan Post baru (CRUD)</li>
		<li>Author&nbsp; hanya dapat membuat post baru (CRUD)</li>
	</ul>
	</li>
	<li>User dummy untuk login melihat CRUD&nbsp;:
	<ul>
		<li>admin admin</li>
		<li>author author</li>
	</ul>
	</li>
	<li>Upload source code hasilnya pada repositori publik&nbsp;(misal github, bitbucket dsb)</li>
</ol>
<hr/><h1>Database Dump</h1><p><small>author 2018-02-02 00:31:00</small></p><p><code>CREATE TABLE IF NOT EXISTS `account` (<br />
&nbsp; `username` VARCHAR(45) NOT NULL,<br />
&nbsp; `password` VARCHAR(250) NOT NULL,<br />
&nbsp; `name` VARCHAR(45) NOT NULL,<br />
&nbsp; `role` VARCHAR(45) NOT NULL,<br />
&nbsp; PRIMARY KEY (`username`))<br />
ENGINE = InnoDB;</code></p>

<p><code>CREATE TABLE IF NOT EXISTS `post` (<br />
&nbsp; `idpost` INT NOT NULL AUTO_INCREMENT,<br />
&nbsp; `title` TEXT NOT NULL,<br />
&nbsp; `content` TEXT NOT NULL,<br />
&nbsp; `date` DATETIME NOT NULL,<br />
&nbsp; `username` VARCHAR(45) NOT NULL,<br />
&nbsp; PRIMARY KEY (`idpost`),<br />
&nbsp; INDEX `fk_post_account_idx` (`username` ASC),<br />
&nbsp; CONSTRAINT `fk_post_account`<br />
&nbsp; &nbsp; FOREIGN KEY (`username`)<br />
&nbsp; &nbsp; REFERENCES `account` (`username`)<br />
&nbsp; &nbsp; ON DELETE NO ACTION<br />
&nbsp; &nbsp; ON UPDATE NO ACTION)<br />
ENGINE = InnoDB;</code></p>
<hr/>
<?= $this->endSection() ?>