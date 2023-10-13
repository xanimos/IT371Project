<?php
$page_title = "Contact";
include($_ENV["source_root"].'layouts/header.php');
?>
<main id="contact">
    <div class="page-container flex-column gap-m">
        <h1 class="title">Contact Us</h1>
        <div class="content standout flex-container gap-m flex-column">
            <form action="/rxjs/contact" method="post" id="contact-form" class="flex-container flex-column gap-s">
                <input type="text" name="email" id="email" placeholder="Email" />
                <input type="text" name="subject" id="subject" placeholder="Subject" />
                <textarea id="message" name="message" placeholder="Enter your message"></textarea>
                <input type="submit" name="submit" value="Send Message" />
            </form>
        </div>
    </div>
</main>
<?php
include($_ENV["source_root"].'layouts/footer.php');
