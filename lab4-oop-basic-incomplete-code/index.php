<?php

require "Profile.php";

$profile = new Profile(
    "Dela Cruz",
    "Juan",
    "Dipasisiil"
);


$profile->setEmail('juan@delacruz.ph');
$profile->setAddress('Barangay Mintal, Davao City, Philippines 8000');
$profile->setcontact_number('09171234567');
$profile->setFavoriteQuote('"Don’t let what you cannot do interfere with what you can do." -John Wooden');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
</head>
<body>
    <h1><?php echo $profile->getCompleteName(); ?></h1>
    <h2><?php echo $profile->getEmail();?></h2>
    <h2><?php echo $profile->getAddress();?></h2>
    <h2><?php echo $profile->getContactNumber();?></h2>
    <p>
        <?php echo $profile->getFavoriteQuote(); ?>
    </p>
</body>
</html>