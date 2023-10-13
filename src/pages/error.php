<?php
$page_title = "Whoops!";
include($_ENV["source_root"].'layouts/header.php');
?>
<main>
    <div class="page-container flex-column gap-m">
        <h1>Oops!</h1>
        <p>The page you are attempting to find does not exist. If this was in error please <a href="/contact">Contact Us</a>.</p>
    </div>
</main>
<?php
include($_ENV["source_root"].'layouts/footer.php');