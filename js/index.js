$("#message-btn").on('click', function () {
   $(".feedback").fadeToggle();
});

$("#send").on("click", function () {
   let name = $("#name").val();
   let email= $("#email").val();
   let telephone = $("#telephone").val();
   let message = $("#message").val();

   let error = "";
   if(name == "" || email == "" || telephone == "")
      error = "Не все поля заполнены";
   else if (!email.includes('@'))
      error = "email не корректный";
   else if (message.length < 10 || message.length >= 400)
      error = "Сообщение короткое";
   if(error != "") {
      $("#messageErrorUser").show();
      $("#messageErrorUser").text(error);
      return false;
   }
   
   let color = "#699853";
   $("#name").val(""); // Пустое значение
	$("#name").css("border-color", color); // Меняем обводку
	
	$("#email").val(""); // Пустое значение
	$("#email").css("border-color", color);
	
	$("#telephone").val(""); // Пустое значение
	$("#telephone").css("border-color", color);
	
	$("#message").val(""); // Пустое значение
	$("#message").css("border-color", color);
	
	// Скрываем ошибку
	$("#messageErrorUser").hide();
	// Меняем текст на кнопке
	$("#send").text("Готово");
}); 

$("header .menu .menu-m").on("click", function () {
   $("header .menu-mobile").slideToggle();
});

$('#reg_user').click(function() {
   let name = $('#username').val();
   let email = $('#email').val();
   let login = $('#login').val();
   let pass = $('#password').val();

$.ajax({
      url: 'ajax/reg.php',
      type: 'POST',
      cache: false,
      data: {
         'username': name, 
         'email': email, 
         'login': login, 
         'password': pass
      },
      dataType: 'html',
      success: function(data) {
         if(data === "Done") {
            $("#reg_user").text("Все готово");
            $("#error-block").hide();
            document.location.reload(true);
         }
         else {
            $("#error-block").show();
            $("#error-block").text(data);
         }
      }
   });
});

$('#login_user').click(function() {
   let email = $('#email').val();
   let pass = $('#password').val();

   $.ajax({
       url: 'ajax/login.php',
       type: 'POST',
       cache: false,
       data: {
           'email': email,
           'password': pass
       },
       dataType: 'html',
       success: function(data) {
           if (data === "Done") {
               $("#login_user").text("Все готово");
               $("#error-block").hide();
               document.location.reload(true);
           } else {
               $("#error-block").show();
               $("#error-block").text(data);
           }
       }
   });
});

$('#add_article').click(function() {
   let title = $('#title').val();
   let anons = $('#anons').val();
   let full_text = $('#full_text').val();

$.ajax({
      url: 'ajax/add_article.php',
      type: 'POST',
      cache: false,
      data: {
         'title': title, 
         'anons': anons, 
         'full_text': full_text, 
      },
      dataType: 'html',
      success: function(data) {
         if(data === "Done") {
            $("#add_article").text("Все готово");
            $("#error-block").hide();
            $('#title').val("");
            $('#anons').val("");
            $('#full_text').val("");
         }
         else {
            $("#error-block").show();
            $("#error-block").text(data);
         }
      }
   });
});

$('#exit_user').click(function() {
$.ajax({
      url: 'ajax/exit.php',
      type: 'POST',
      cache: false,
      data: {},
      dataType: 'html',
      success: function(data) {
            document.location.reload(true);
      }
   });
});

$('#exit_userr').click(function() {
   $.ajax({
         url: 'ajax/exit.php',
         type: 'POST',
         cache: false,
         data: {},
         dataType: 'html',
         success: function(data) {
               document.location.reload(true);
         }
      });
   });

