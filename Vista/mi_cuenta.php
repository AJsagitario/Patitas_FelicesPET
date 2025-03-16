<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <?php include 'head.php'; ?>
    <?php include 'header.php'; ?>
    <section id="body">
        <div class="row justify-content-center">
            <div class="col-md-4 d-flex">
                <div class="login">
                    <h3 class="login-title">LOGIN</h3>
                    <form id="login-fomr" action="#" method="post">
                        <input type="email" name="email" placeholder="user o correo electrónico" required=""/>
                        <input type="password" name="password" placeholder="contraseña" required=""/>
                        <label class="label-form">
                            <input class="remember" name="rememberme" type="checkbox" id="rememberme" value="forever"/>
                            <span>Remember me</span>
                            <button type="submit">Ingresar</button>
                            <p class="lost-password">
                                <a href="#">Perdiste tu contraseña?</a>
                            </p>
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="register">
                    <h3 class="register-title">REGISTER</h3>
                    <form id="register-form" action="#" method="post">
                        <input type="text" name="user" placeholder="Usuario" required/>
                        <input type="email" name="email" placeholder="email" required/>
                        <input type="password" name="password" placeholder="contraseña" required/>
                        <button type="submit">Registrate</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</html>
