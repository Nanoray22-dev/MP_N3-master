<?php
session_start();

if (isset($_SESSION['dato'])) {
    $dato = $_SESSION['dato'];
} else {
    // si no existe ninguna session redireccionar a:
    header('location: ../user/login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../CSS/personal_info.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 

</head>

<body>
    <!-- NAV Y LOGO -->
    <nav>
        <img src="../assets/devchallenges-light.svg" alt="logo">
        <ul>
            <div class="interactiveName">
                <li class="containerPicInNav"><div >
                <?php if ($dato['foto'] != '') : ?>
                                    <img src="<?= $dato['foto'] ?>" 
                                    alt="" class="cuadradoNav">
                                    <?php endif; ?>

                </div><?php echo $dato['nombres'] ?>
                    <span class="material-symbols-outlined">
                        arrow_drop_down
                    </span>
                </li>
            </div>

            <div class="interactiveMenu">
                <ul>
                    <div class="myProfileInteractive">
                        <li class="liInteractive">
                            <span class="material-symbols-outlined">
                                account_circle
                            </span>
                            <a href="" class="aTextInteractive">My Profile</a>
                        </li>
                    </div>
                    <div class="groupChatInteractive">
                        <li class="liInteractive2">
                            <span class="material-symbols-outlined groupChat ">
                                group
                            </span>
                            <a href="" class="aTextInteractive">Group Chat</a>
                        </li>
                    </div>
                    <div class="logOutInteractive">
                        <li class="liInteractive3"><span class="material-symbols-outlined logOutText">
                                logout
                            </span>
                            <a href="../action/logout.php" class="logOutText aTextInteractiveLog">Logout</a>
                        </li>
                    </div>
                </ul>
            </div>

        </ul>

    </nav>
 <!-- NAV Y LOGO -->

 <!-- TITULO DE LA PAGINA -->
    <section>
        <h2 class="personalInfo">Personal info</h2>
        <p class="basicInfo">Basic info, like your name and photo</p>
    </section>
<!-- TITULO DE LA PAGINA -->

<!-- CONTENEDOR DE INFORMACIONES DE USUARIO  -->
    <section>
        <table>
            <thead>
                <th>
                    <div>
                        <h3 class="thProfile" style="color: #fff;">Profile</h3>
                        <p class="thSomeInfo">Some info may be visible to other people</p>
                    </div>

                    <div>
                        <a href="../User/edit_info.php"><button class="thBtnEdit">Edit</button></a>
                    </div>
                </th>
            </thead>
            <tbody>
                <td class="tdFoto">
                    <div class="nameTd">
                        <h3>PHOTO</h3>
                    </div>
                    <div>
                        <span>
                            <div >
                            <?php if ($dato['foto'] != '') : ?>
                                    <img src="<?= $dato['foto'] ?>" 
                                    alt="" class="cuadrado">
                                    <?php endif; ?>
                            </div>
                        </span>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td class="tdDatosTable">
                    <div>
                        <h3>NAME</h3>
                    </div>
                    <div>
                        <p><?php echo $dato['nombres'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td class="tdDatosTable">
                    <div>
                        <h3>BIO</h3>
                    </div>
                    <div>
                        <p><?php echo $dato['bio'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td class="tdDatosTable">
                    <div>
                        <h3>PHONE</h3>
                    </div>
                    <div>
                        <p><?php echo $dato['telefono'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td class="tdDatosTable">
                    <div>
                        <h3>EMAIL</h3>
                    </div>
                    <div>
                        <p><?php echo $dato['email'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td class="tdDatosTable">
                    <div>
                        <h3>PASSWORD</h3>
                    </div>
                    <div>
                        <p>***********</p>
                    </div>
                </td>
            </tbody>
        </table>
        <div class="linksFoot">
            <p>created by <a href="#" class="aLink">username</a></p>
            <p>devChallenges.io</p>
        </div>
    </section>
<!-- -->
</body>

</html>