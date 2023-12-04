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

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        padding: 0;
        background-color: #333;
        color: #fff;
    }


    nav {
        display: flex;
        flex-direction: row;
        align-items: baseline;
        justify-content: space-between;
        padding: 10px 40px;
    }



    .interactiveMenu {
        width: 188px;
        height: 174px;
        border-radius: 12px;
        border: 1px;
        border: 1px solid #E0E0E0;
        visibility: hidden;
        position: absolute;
        /*mueve la posicion de la caja interactiva*/
        top: 50px;
        right: 20px;
    }





    .myProfileInteractive {
        margin-top: 20px;
        margin-left: 20px;

    }

    .groupChatInteractive {
        margin-top: 20px;
        margin-left: 20px;

    }

    .logOutInteractive {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 15px;
        border-top: 1px solid #E0E0E0;
        padding: 5px;
        color: #EB5757;

    }

    ul {
        list-style: none;
    }

    .aTextInteractive {
        text-decoration: none;
        color: #4F4F4F;

    }


    .cuadrado {
        width: 72px;
        height: 72px;
        top: 263.55px;
        left: 345.22px;
        border-radius: 8px;
        margin-right: 15px;
        display: flex;
    }

    .cuadradoNav {
        width: 32px;
        height: 36.69px;
        margin-right: 10px;
        border-radius: 8px;
    }

    .containerPicInNav {
        display: flex;
        align-items: center;
        justify-content: center;

    }


    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Noto Sans', sans-serif;

    }

    nav {
        display: flex;
        flex-direction: row;
        align-items: baseline;
        justify-content: space-between;
        padding: 10px 40px;
    }

    section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .personalInfo {
        width: 208px;
        height: 49px;
        top: 102px;
        left: 627.97px;
        font-size: 36px;
        font-weight: 400;
        line-height: 49px;
        letter-spacing: -0.035em;
        text-align: left;

    }


    .basicInfo {
        width: 274px;
        height: 25px;
        top: 159px;
        left: 591.11px;
        font-size: 18px;
        font-weight: 300;
        line-height: 25px;
        letter-spacing: -0.035em;
        text-align: left;
        margin-bottom: 20px;

    }

    table {
        width: 845.91px;
        top: 228.06px;
        left: 297.04px;
        border-radius: 12px;
        border: 1px;
        border: 1px solid #E0E0E0;
    }

    th {
        display: flex;
        align-items: baseline;
        padding: 20px 50px;
        gap: 150px
    }

    .thProfile {
        width: 69px;
        height: 33px;
        top: 256.38px;
        left: 346.34px;
        font-size: 24px;
        font-weight: 400;
        line-height: 33px;
        letter-spacing: -0.035em;
        text-align: left;

    }

    .thSomeInfo {
        width: 463.25px;
        height: 19.79px;
        top: 293.38px;
        left: 347px;
        font-size: 13px;
        font-weight: 500;
        line-height: 18px;
        letter-spacing: -0.035em;
        text-align: left;

    }

    .Boton_info {
        width: 95.34px;
        height: 38px;
        top: 267.11px;
        left: 998.77px;
        border-radius: 12px;
        border: 1px;
        border: 1px solid #828282;

        color: #828282;

    }

    .Boton_info:hover {
        /* background-color: #fff; */
        border: 1px solid white;
        color: rgb(139, 139, 139);
        transition: 0.3s;
    }

    .tdDatosTable {
        display: flex;
        align-items: baseline;
        border-top: 1px solid #E0E0E0;
        padding: 25px 50px;
        gap: 150px
    }

    .tdFoto {
        display: flex;
        border-top: 1px solid #E0E0E0;
        padding: 15px 50px;
        gap: 150px;
    }


    h3 {
        width: 37px;
        height: 18px;
        top: 471.3px;
        left: 346.34px;
        font-size: 13px;
        font-weight: 500;
        line-height: 18px;
        letter-spacing: -0.035em;
        text-align: left;
        color: #BDBDBD;

    }

    .linksFoot {
        color: #828282;
        font-size: 14px;
        display: flex;
        margin-top: 15px;
        gap: 600px
    }

    .aLink {
        color: #828282;
        text-decoration: underline;
    }

    .nameTd {
        padding-top: 30px;
        gap: 500px
    }

    .interactiveMenu {
        width: 188px;
        height: 174px;
        border-radius: 12px;
        border: 1px;
        border: 1px solid #E0E0E0;
        visibility: hidden;
        position: absolute;
        /*mueve la posicion de la caja interactiva*/
        top: 50px;
        right: 20px;
    }



    .desplegar {
        visibility: visible;
    }

    .myProfileInteractive {
        margin-top: 20px;
        margin-left: 20px;

    }

    .groupChatInteractive {
        margin-top: 20px;
        margin-left: 20px;

    }

    .logOutInteractive {
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 15px;
        border-top: 1px solid #E0E0E0;
        padding: 5px;
        color: #EB5757;

    }

    ul {
        list-style: none;
    }

    .aTextInteractive {
        text-decoration: none;
        color: #4F4F4F;

    }

    .aTextInteractiveLog {
        text-decoration: none;
        color: #EB5757;

    }

    .paintInteractive {
        width: 154.12px;
        height: 39.15px;
        border-radius: 8px;
        background: #F2F2F2;
        padding: 7px;
    }

    .cuadrado {
        width: 72px;
        height: 72px;
        top: 263.55px;
        left: 345.22px;
        border-radius: 8px;
        margin-right: 15px;
        display: flex;
    }

    .cuadradoNav {
        width: 32px;
        height: 36.69px;
        margin-right: 10px;
        border-radius: 8px;
    }

    .containerPicInNav {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .aLink:hover {
        color: #33b2fc;
        transition: 0.3s;
    }
</style>


<body>
    <!-- NAV Y LOGO -->
    <nav>
        <img src="../assets/devchallenges-light.svg" alt="logoOriginal">
        <ul>
            <div class="interactiveName">
                <li class="containerPicInNav">
                    <div>
                        <?php if ($dato['foto'] != '') : ?>
                            <img src="<?= $dato['foto'] ?>" alt="" class="cuadradoNav">
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
                        <a href="../User/edit_info.php"><button class="Boton_info">Edit</button></a>
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
                            <div>
                                <?php if ($dato['foto'] != '') : ?>
                                    <img src="<?= $dato['foto'] ?>" alt="" class="cuadrado">
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

    <script src="../JS/srcipt.js"></script>
</body>

</html>