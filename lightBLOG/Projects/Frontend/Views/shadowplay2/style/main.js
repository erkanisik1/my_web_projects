$(function(){

    $('.sim-thumb').on('click', function() {
  $('#main-product-image').attr('src', $(this).data('image'));
})

$('#submit').hide();

 $("#uye_formu").on("keyup", function(event){

        form_kontrolu();

    });

 



});



var form_kontrolu = function(){

    var kadi = $("#isim").val();

    var sifre1 = $("#pass").val();

    var sifre2 = $("#pass1").val();

    var email = $("#mail").val();

    var atpos=email.indexOf("@");

    var dotpos=email.lastIndexOf(".");

    if ( kadi==null || kadi=="" || kadi.length < 4 )

        $('.uyari1').html("<div class='uyari'>Kullanıcı adı 4 karakterden az olamaz</div>");

    else if ( sifre1 == null || sifre1 == "" || sifre2 == null || sifre2 == "" )

        $('.uyari1').html("<div class='uyari'>Şifre alanlarını boş bırakmayın!</div>");

    else if ( !(sifre1 == sifre2) )    

        $('.uyari1').html("<div class='uyari'>Şifreler eşleşmiyor!</div>");

    else if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )

        $('.uyari1').html("<div class='uyari'>Geçerli email adresi girin</div>");

    else

    {

        $('.uyari1').empty();

        $('#submit').fadeIn(500);

        $('#uye_formu').removeAttr('onsubmit');

    }







   

}



function openCity(evt, cityName) {

    // Declare all variables

    var i, tabcontent, tablinks;



    // Get all elements with class="tabcontent" and hide them

    tabcontent = document.getElementsByClassName("tabcontent");

    for (i = 0; i < tabcontent.length; i++) {

        tabcontent[i].style.display = "none";

    }



    // Get all elements with class="tablinks" and remove the class "active"

    tablinks = document.getElementsByClassName("tablinks");

    for (i = 0; i < tablinks.length; i++) {

        tablinks[i].className = tablinks[i].className.replace(" active", "");

    }



    // Show the current tab, and add an "active" class to the button that opened the tab

    document.getElementById(cityName).style.display = "block";

    evt.currentTarget.className += " active";

}

 document.getElementById("defaultOpen").click();

