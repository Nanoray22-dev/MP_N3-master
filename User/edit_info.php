<?php
session_start();

if (isset($_SESSION['dato'])) {
    $dato = $_SESSION['dato'];
} else {
    header('location: ./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Info</title>
    <link rel="stylesheet" href="../CSS/edit_info.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<style>
    *{
    box-sizing: border-box;
    padding: 0%;
    margin: 0%;
    font-family: 'Noto Sans', sans-serif;
    background-color: #333;
    color: #fff;

}

nav{
    padding: 10px 80px;
    display: flex;
    justify-content: space-between;
    align-items: baseline;
}

.linkBack{
text-decoration: none;
color: #2D9CDB;
}

.changeInfo{
font-size: 24px;
font-weight: 400;
letter-spacing: -0.035em;
margin-top: 25px;
}

.changesWill{
font-size: 13px;
letter-spacing: -0.035em;
color: #fff;
padding-top: 7px;

}

.changePhoto{
font-size: 13px;
line-height: 18px;
letter-spacing: -0.035em;
color: #fff;
}


label{
width: 36px;
font-size: 13px;
color: #4F4F4F;


}

.inputEditInfo{
width: 416.93px;
height: 52px;
border-radius: 12px;
border: 1px solid #828282;
margin-bottom: 20px;
padding: 0px 20px;
outline: none;
margin-top: 5px;
}

.btnSave{
    width: 82px;
    height: 38px;
    border-radius: 8px;
    background: #2F80ED;
    color: white;
    font-size: 16px;
    border: none;
    margin-top: 15px;
}

.btnSave:hover{
    background: #318bff;
    transition: background-color 0.3s;
    cursor: pointer;

}

.linksFoot{
    color:#828282;
    font-size: 14px;
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
}

.aLink{
    color:#828282;
    text-decoration:underline;

}

.container{
width: 845.91px;
height: 777.56px; 
border-radius: 12px;
border: 1px solid #E0E0E0;
margin-top: 10px;
padding: 0px 40px;
}

.changePhoto{
    display: flex;
    align-items: center;
    padding: 30px 0px;
}

.inputBio{
width: 416.93px;
height: 91.58px;
border-radius: 12px;
border: 1px solid #828282;
margin-bottom: 20px;
margin-top: 5px;
outline: none;
padding: 0px 20px;
padding-bottom: 35px;
line-height: 1.5px;
}

.bigContainerAll{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.containerNavInteractive{
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


/*ETIQUETA QUE AGREGA COLOR*/
.myProfileNav{
width: 154.12px; /*164.12*/
height: 39.15px;
border-radius: 8px;
background: #F2F2F2;
}

.aTextInteractive{
    color: #4F4F4F;
    text-decoration: none;

}

ul{
    list-style: none;
}

.logOutText{
   color: #EB5757;
}

.logoutDiv{
    width: 95px;
    height: 16px;
    top: 153.7px;
    left: 1229.64px;
}

.invisible{
visibility: visible;
}

.myProfilePosition{
margin: 20px 0px 0px 20px;

}

.myProfilePositionLast{
    margin: 20px;
    padding-top: 5px;
    border-top: solid 1px #E0E0E0;
}

.liInteractive3{
    display: flex;
    flex-direction: row;
    align-items:center;
    gap: 10px;
    padding-left: 5px;
}

.liInteractive2{
    display: flex;
    flex-direction: row;
    align-items:center;
    gap: 10px;
    padding-left: 5px;

}

.liInteractive{
    display: flex;
    flex-direction: row;
    align-items:center;
    gap: 10px;
    padding-left: 5px;

}


.changeTittle{
    display: inline-block;
    cursor: pointer;
    overflow: hidden;
    white-space: nowrap;
    width: 130px;

}

.changeTittle .textFoto{
    display: inline-block;
    color: #fff;
    border-radius: 4px;
    transition: background-color 0.3s;
    text-decoration: underline;
  
}
.changeTittle .textFoto:hover{
    color: #318bff;
    text-decoration: none;
    
}

#foto{
display: none;
}

.cuadrado{
width: 72px;
height: 72px;
border-radius: 8px;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;

}

.fotoAndChangeFoto{
    display: flex;
    gap: 55px;
    margin: 20px 0px;
 
}

.cuadradoNav{
width: 32px;
height: 36.69px;
margin-right: 10px;
border-radius: 8px;
}

.divImgName{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}

.containImgAndIcon{
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;

}


.aLink:hover{
    color: #33b2fc; 
    transition: 0.3s;
}

.iconCamara {
    position: absolute;
    align-items: center;
    justify-content: center;
    color: white; 
}


/*DARK MODE*/
.darkMode{
    width: 30px;
    height: 30px;
    border-radius: 10px;
    border: solid 2px #828282;
    margin: 30px 60px 0px;
}

.a{
    background-color: #252329;
    color: white; 
    transition: 0.4s;
}

.textwhite{
    color: white; 
}

.logoWhite{
    display: none;
}

.logoDark{
    display: block;
}

input{
    background-color: transparent;
    color: gray;
    width: 100%;
    height: 100%;
}

input:focus-within{
    border: solid 2px #33b2fc;
}

.moon{
    color: gray;
}
</style>

<body class="allPage">
    <nav class="menu">
    <img src="../assets/devchallenges-light.svg" alt="logo" class="logoOriginal">
     
        <ul id="menuList">
            <div class="clickAndActive">
                <li>
                    <div class="divImgName">
                        <?php if ($dato['foto'] != '') : ?>
                                    <img src="<?= $dato['foto'] ?>" 
                                    alt="foto Perfil" class="cuadradoNav">
                                    <?php endif; ?>
                        <?php echo $dato['nombres'] ?>
                        <span class="material-symbols-outlined">
                            arrow_drop_down
                        </span>
                    </div>
            </div>

            <div class="containerNavInteractive">
                <ul class="menu__nesting">
                    <div class="myProfilePosition">
                        <li class="liInteractive"><span class="material-symbols-outlined">
                                account_circle
                            </span>
                            <a href="./yourInfo.php" class="aTextInteractive">My Profile</a>
                        </li>
                    </div>
                    <div class="myProfilePosition">
                        <li class="liInteractive2">
                            <span class="material-symbols-outlined groupChat ">
                                group
                            </span>
                            <a href="" class="aTextInteractive">Group Chat</a>
                        </li>
                    </div>

                    <div class="myProfilePositionLast">
                        <li class="liInteractive3"><span class="material-symbols-outlined logOutText">
                                logout
                            </span>
                            <a href="./LOGIC/destroy.php" class="logOutText aTextInteractive">Logout</a>
                        </li>
                    </div>
                </ul>
            </div>

            </li>
        </ul>

    </nav>



    <div class="bigContainerAll">
        <section>
            <a href="../User/personal_info.php" class="linkBack">
                < Back</a>
            <section class="container">
             
                        <h2 class="changeInfo">Change Info</h2>
                        <p class="changesWill">Changes will be reflected to every services</p>
                    <form action="../action/edit.php" method="POST" enctype="multipart/form-data">
                        <div class="fotoAndChangeFoto">
                            <label for="foto">
                                <div class="containImgAndIcon">
                                    <?php if ($dato['foto'] != '') : ?>
                                    <img src="<?= $dato['foto'] ?>" 
                                    alt="foto Perfil" class="cuadrado">
                                    <?php endif; ?>
                                    <span class="material-symbols-outlined iconCamara">
                                        photo_camera
                                    </span>
                                </div>
                            </label>
                            <div class="changePhoto">
                                <label class="changeTittle">
                                    <span class="textFoto">CHANGE FOTO</span>
                                    <input type="file" name="foto" id="foto" class="subirFoto">
                                </label>
                            </div>
                        </div>
                        <label for="name" class="labelName">Name</label><br>
                        <input type="text" id="name" name="nombres" placeholder="Enter your name.." class="inputEditInfo" autocomplete="off"><br>
                        <label for="bio">Bio</label><br>
                        <input type="text" id="bio" name="bio" placeholder="Enter your bio.." class="inputBio" autocomplete="off" ><br>

                        <label for="phone">Phone</label><br>
                        <input type="text" id="phone" name="telefono" placeholder="Enter your phone.." class="inputEditInfo" autocomplete="off" ><br>

                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" placeholder="Enter your email.." class="inputEditInfo"  autocomplete="off" required><br>

                        <label for="password">Password</label><br>
                        <input type="text" id="password" name="password" placeholder="Enter your password.." class="inputEditInfo"  autocomplete="off" required><br>
                        <button type="submit" class="btnSave">Save</button>
                    </form>

            </section>
            <div class="linksFoot">
                <p>created by username</p>
                <p>devChallenges.io</p>
            </div>
        </section>
    </div>
    
</body>

<script>
    const liInteractive = document.querySelector('.liInteractive');
const liInteractive2 = document.querySelector('.liInteractive2');
const liInteractive3 = document.querySelector('.liInteractive3');

liInteractive.addEventListener('mouseover', function () {
    liInteractive.classList.add('myProfileNav');
    liInteractive2.classList.remove('myProfileNav');
    liInteractive3.classList.remove('myProfileNav');
});

liInteractive2.addEventListener('mouseover', function () {
    liInteractive.classList.remove('myProfileNav');
    liInteractive2.classList.add('myProfileNav');
    liInteractive3.classList.remove('myProfileNav');
});

liInteractive3.addEventListener('mouseover', function () {
    liInteractive.classList.remove('myProfileNav');
    liInteractive2.classList.remove('myProfileNav');
    liInteractive3.classList.add('myProfileNav');
});


const click = document.querySelector('.clickAndActive');
const interactiveNameNav = document.querySelector('.containerNavInteractive');


click.addEventListener('click', function () {
    interactiveNameNav.classList.toggle('invisible');
})
</script>

</html>