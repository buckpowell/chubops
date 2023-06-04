<?php if($status==true) :?>
<div align="center" class="admin-text" style="color:green;"><b><?= $message ?></b></div>
<?php elseif ($status==false) :?>
<div align="center" class="admin-text" style="color:red;"><b><?= $message ?></b></div>
<?php endif ?>
<head>
<meta http-equiv="refresh" content="4;url='<?= $url ?>'">
</head>
<p align="center" class="admin-text" style="color: #156dff">If this page doesn't refresh within 5 seconds, please click the link below.</p>
<p align="center"><br><a style="text-decoration:underline;color:pink" href = <?= $url ?>">Go to <?= $location ?></a></p>



