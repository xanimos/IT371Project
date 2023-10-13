<?php

use xpressxd\User;
User::pageGuard();

$page_title = "Settings";
include($_ENV["source_root"].'layouts/header.php');

$failed_image = false;

if(isset($_POST['save-settings']))
{
    $data = array_intersect_key($_POST, [
        'display_name' => '',
        'tagline' => '',
        'signature' => '',
        'referral_code' => '',
        'description' => ''
    ]);
    $data = array_map('htmlentities', $data);
    $file = $_FILES["profile_image"] ?? false;
    if($file && !empty($file["tmp_name"]))
    {
        $check = getimagesize($file["tmp_name"]);
        if($check !== false && $file["size"] < 500000) {
            $data["profile_image"] = 'data:images/jpeg;base64,'.base64_encode(file_get_contents($file["tmp_name"]));
        } else {
            $failed_image = true;
        }
    }
    User::updateUserData($data);
}

$data = User::getUserData();

?>
<main id="settings">
    <div class="page-container flex-column gap-m">
        <h1>Settings</h1>
        <div class="flex-container gap-m">
            <div class="main-content">
                <form action="/settings" method="post" enctype="multipart/form-data">
                <section id="basic-information">
                    <div class="grid-container gap-s">
                        <label for="display_name">Public Name</label>
                        <input type="text" id="display_name" name="display_name" placeholder="<?=$data['display_name']?>">
                        <div><p>Name shown on all your posts and public profile</p></div>

                        <label for="referral_code">Referral Link</label>
                        <input type="text" id="referral_code" name="referral_code" placeholder="<?=$data['referral_code']?>">
                        <div><p>Unique text used in your referral link</p></div>

                        <label for="profile_image">
                            <?php if($failed_image) {?> <span class="error">(Invalid image)</span><br /><?php } ?>
                            Profile Image
                        </label>
                        <input type="file" id="profile_image" name="profile_image">
                        <div><img src="<?=$data['profile_image']?>"></div>

                        <label for="signature">Signature</label>
                        <input type="text" id="signature" name="signature" placeholder="<?=$data['signature']?>">
                        <div><p>Default signature shown below each post</p></div>

                        <label for="tagline">Tagline</label>
                        <input type="text" id="tagline" name="tagline" placeholder="<?=$data['tagline']?>">
                        <div><p>A short line of text shown below your name</p></div>

                        <label for="description">Description</label>
                        <textarea id="description" name="description"><?=$data['description']?></textarea>
                        <div><p>A blurb of text to show on your profile page</p></div>
                    </div>
                </section>
                <div class="flex-container flex-end form-submit">
                    <input class="cta" type="submit" value="Save Settings" id="save-settings" name="save-settings">
                </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
include($_ENV["source_root"].'layouts/footer.php');
