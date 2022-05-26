<?= $this->include("layout/header");?>
<main class="main-class">
    <!-- main head -->
    <?= $this->renderSection("content");?>
    <?= $this->include("layout/footer");?>

</main>
<?= $this->include("layout/common_script");?>
<?= $this->renderSection("scripts"); ?>
</body>
</html>
