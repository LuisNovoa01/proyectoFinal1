

var config = {
  apiKey: "AIzaSyBSVuUn1r_9Esfh9ZbchQUFBY2_aFlQ5GM",
  authDomain: "loginsocial-fb4c7.firebaseapp.com",
  projectId: "loginsocial-fb4c7",
  storageBucket: "loginsocial-fb4c7.appspot.com",
  messagingSenderId: "315190083840",
  appId: "1:315190083840:web:95556c4f450accb63373e5",
  measurementId: "G-K9YCPD97F4"
};

// Initialize Firebase
firebase.initializeApp(config);
firebase.analytics();




var auth = firebase.auth();
document.getElementById('btnloging').addEventListener('click', function () {
    var provider = new firebase.auth.GoogleAuthProvider();
    auth.signInWithPopup(provider)
    .then(function (result) {
        var user = result.user;

        console.log(result.user.providerData[0].displayName);
        console.log(result.user.providerData[0].email);
        console.log(result.user.providerData[0].photoURL);

        $.post("controller/usuario.php?op=accesosocial",{usu_correo:result.user.providerData[0].email},function(data){
            if(data==0){
                $('#lblerror').hide();
                $('#lblmensaje').hide();
                $('#lblregistro').show();
            }else{
                window.open('http://localhost/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }).catch(function (error) {
        console.log(error);
    });
});

document.getElementById('btnloginf').addEventListener('click', function () {
    var provider = new firebase.auth.FacebookAuthProvider();
    auth.signInWithPopup(provider)
    .then(function (result) {
        var user = result.user;
        console.log(user);
        console.log(result.user.providerData[0].displayName);
        console.log(result.user.providerData[0].email);
        console.log(result.user.providerData[0].photoURL);
        $.post("controller/usuario.php?op=accesosocial",{usu_correo:result.user.providerData[0].email},function(data){
            if(data==0){
                $('#lblerror').hide();
                $('#lblmensaje').hide();
                $('#lblregistro').show();
            }else{
                window.open('http://localhost/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }).catch(function (error) {
        console.log(error);
    });
});

document.getElementById('btnloginh').addEventListener('click', function () {
    var provider = new firebase.auth.GithubAuthProvider();
    auth.signInWithPopup(provider)
    .then(function (result) {
        var user = result.user;
        console.log(user);
        console.log(result.user.providerData[0].displayName);
        console.log(result.user.providerData[0].email);
        console.log(result.user.providerData[0].photoURL);
        $.post("controller/usuario.php?op=accesosocial",{usu_correo:result.user.providerData[0].email},function(data){
            if(data==0){
                $('#lblerror').hide();
                $('#lblmensaje').hide();
                $('#lblregistro').show();
            }else{
                window.open('http://localhost/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }).catch(function (error) {
        console.log(error);
    });
});

function init(){

}

$(document).ready(function() {
    $('#lblmensaje').hide();
    $('#lblerror').hide();
    $('#lblregistro').hide();
});

$(document).on("click", "#btnlogin", function () {
    var usu_correo =  $('#email').val();
    var usu_pass =  $('#password').val();

    if (usu_correo=='' || usu_pass==''){
        $('#lblmensaje').show();
        $('#lblerror').hide();
        $('#lblregistro').hide();
    }else{
        $.post("controller/usuario.php?op=acceso",{usu_correo:usu_correo,usu_pass:usu_pass},function(data){
            if(data==0){
                $('#lblerror').show();
                $('#lblmensaje').hide();
            }else{
                window.open('http://localhost/PERSONAL_LoginRegisterSocialMedia/view/home/','_self');
            }
        });
    }
});

