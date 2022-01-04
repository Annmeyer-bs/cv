function checkRiting() {
  var password_1 = $("#NPassword").val();
  var password_2 = $("#CPassword").val();
  var msg = "";
  if (password_2 == "") {
  msg = "Пароль не подтвержден. Пожалуйста, повторите ввод пароля";
  }
  else {
  if (password_1 != password_2) {
  msg = "В полях 'Пароль' комбинации символов не совпадают";
  }
  }
  if (msg != "") {
  $("#CPassword")
  .css("background", "#ffcab2");
  alert(msg);
  return false;
  }
  }
  
 $(document).ready(function(){
   $("#form").submit(function(){
    $.ajax({
      type: "POST",
      url: "check.php",
      data: $(this).serialize()
    }).done(function() {
      alert( "Ok" );
    });
   // return false;

   });
   //$('.input').val('');
 });

 $(document).ready(function(){
  $("#formlog").submit(function(){
   $.ajax({
     type: "POST",    
     url: "auth.php",
     data: $(this).serialize()
   }).done(function() {
     alert( "Ok" );
   });
  // return false;

  });
  //$('.input').val('');
});
